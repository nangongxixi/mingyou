<?php

namespace Admin\Controller;

use Component\AdminController;

class ProblemController extends AdminController {

    function showlist() {
        $info = $this->getInfo();
        $this->assign('info', $info);
        $this->display();
    }

    function hchats() {
        $this->display();
    }

    //获取Y轴名称
    function getYAxis() {
        $logList = D("log_list");
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $pinfoo = $logList->query($sql);
        $pinfo = array_flip(array_column($pinfoo, 'list_id', 'list_name'));
        $zsql = "select * from `yw_log_list` where list_deleted=0";
        $zlog = $logList->query($zsql);
        $yAxis = [];
        foreach ($zlog as $k => $v) {
            if ($v['list_pid'] != 0) {
                $yAxis[] = $pinfo[$v['list_pid']] . $v['list_name'];
            } else {
                $yAxis[] = $v['list_name'];
            }
        }
        $getYAxis = json_encode($yAxis);
        echo $getYAxis;
    }

    function getData() {
        $log = D('log');
        $logList = D('log_list')->select();
        //前24小时开始时间
        $time = time() - 86400;
        $timeStart = date('Y-m-d H:i:s', $time);
        $logId = array_column($logList, 'list_id');
        $logName = array_column($logList, 'list_name', 'list_id');
        foreach ($logId as $v) {
            $condition = "log_name=" . $v . " and log_reported_time > '" . $timeStart . "' and !isNULL(log_first_response_time) and list_deleted=0";
            $echartsData = $log->where($condition)->order('log_reported_time asc')->select();
            if ($echartsData) {
                foreach ($echartsData as $k => $v) {
                    //开始时间 = 报告时间-$time(以数组中的“log_name”作为分组依据)
                    $accidentTime[$v['log_name']][] = strtotime($echartsData[$k]['log_reported_time']) - $time; //开始位置                    
                    //长度 = 完成时间-报告时间
                    $accidentTime[$v['log_name']][] = ((strtotime($echartsData[$k]['log_completion_time']) - strtotime($echartsData[$k]['log_reported_time']))); //长度                    
                }
            }
        }        
        // show_bug($accidentTime);
        foreach ($accidentTime as $k => $v) {
            //把 子数组 倒序
            $arrDao = array_reverse($v);
            //重新给子数组key为偶数的赋值
            foreach ($arrDao as $kk => $vv) {
                if ($kk % 2 != 0 && $kk != count($v) - 1) {
                    //假如时间重叠，就把故障值合并，并删掉相邻的键值
                    if (($arrDao[$kk] - ($arrDao[$kk + 1] + $arrDao[$kk + 2]))<0) {
                        $arrDao[$kk] = $arrDao[$kk - 1] + $arrDao[$kk + 1];
                        unset($arrDao[$kk - 1]);
                        unset($arrDao[$kk + 1]);                        
                    } else {
                        $arrDao[$kk] = $arrDao[$kk] - ($arrDao[$kk + 1] + $arrDao[$kk + 2]);
                    }                    
                }
            }
            //计算最后那一段的长度
            $arrEnd = 86400 - array_sum($arrDao);           
            array_unshift($arrDao, $arrEnd);
            //把数组顺序换回来 并重新赋值给二维数组的key            
            $accidentTime[$k] = array_reverse($arrDao);            
        }        
        //show_bug($accidentTime);        
        $arr = [];
        foreach ($logName as $k => $v) {
            if (in_array($k, array_keys($accidentTime))) {
                $arr[$k] = $accidentTime[$k];
            } else {
                $arr[$k][] = 86400;
            }
        }
        //让数组的key从新从0开始
        function restore_array($arr) {
            if (!is_array($arr)) {
                return $arr;
            }
            $c = 0;
            $new = array();
            while (list($key, $value) = each($arr)) {
                if (is_array($value)) {
                    $new[$c] = restore_array($value);
                } else {
                    $new[$c] = $value;
                }
                $c++;
            }
            return $new;
        }
        $arr = restore_array($arr);
        //把二维数组 子数组 的个数组成一维数组
        $coun = [];
        foreach ($arr as $k => $v) {
            $coun[] = count($v);
        }
        //拼装新数组
        $arrData = [];
        for ($i = 0; $i < max($coun); $i++) {
            if ($i % 2 != 0) {
                $arrData[$i]['name'] = '故障维护';
            } else {
                $arrData[$i]['name'] = '正常运行';
            }
            $arrData[$i]['type'] = 'bar';
            $arrData[$i]['stack'] = '总量';
            if ($i % 2 != 0) {
                $arrData[$i]['itemStyle']['normal']['color'] = 'red';
            } else {
                $arrData[$i]['itemStyle']['normal']['color'] = 'green';
            }
            foreach ($arr as $k => $v) {
                if (!isset($v[$i])) {
                    $arrData[$i]['data'][$k] = 0;
                } else {
                    $arrData[$i]['data'][$k] = $v[$i];
                }
            }
        }
        $jsonData = json_encode($arrData);
        echo $jsonData;
    }

    function add() {
        if (!empty($_POST)) {
            //在AuthModel里边通过一个指定方法实现权限添加
            $auth = new \Model\AuthModel();
            $z = $auth->addAuth($_POST);
            if ($z) {
                $this->success('添加权限成功！', U('showlist'));
            } else {
                $this->error('添加权限失败！', U('showlist'));
            }
        } else {
            //获得父级权限信息
            $info = $this->getInfo(true);
            //show_bug($info); 
            //从$info里边获得信息。例如：array(1=>'商品管理',2=>'添加商品',3=>'订单打印')
            //以便在smarty模板中使用{html_options}
            $authinfo = array();
            foreach ($info as $v) {
                $authinfo[$v['auth_id']] = $v['auth_name'];
            }

            $this->assign('authinfo', $authinfo);
            $this->display();
        }
    }

    function getInfo($flag = false) {
        //如果$flag标志为false，查询全部的权限信息
        //如果$flag标志为true,只查询level=0/1的权限信息
        $auth = D('Auth');
        if ($flag == true) {
            $info = D('Auth')->where('auth_level<2 and deleted=0')->order('auth_path asc')->select();
        } else {
            $info = D('Auth')->where('deleted=0')->order('auth_path asc')->select();
        }
        //$info[X][auth_name] = "->"auth_name
        foreach ($info as $k => $v) {
            $info[$k]['auth_name'] = str_repeat('&nbsp;&nbsp;&nbsp;├ ', $v['auth_level']) . $info[$k]['auth_name'];
        }
        return $info;
    }

}
