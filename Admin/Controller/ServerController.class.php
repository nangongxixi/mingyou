<?php

namespace Admin\Controller;

use Component\AdminController;

header('Cache-control: private, must-revalidate');

class ServerController extends AdminController {

    function showlist() {
        $log = D("log");
        $logg = D("log_list");
        $user = D("manager");        
        //务必注意有无空格的问题
        $_SESSION['sear'] = [
            'log_name' => [' in (', implode(',',$_GET['log_name']), ')'],
            'log_deal_user' => [' like \'%', $_GET['deal_user'], '%\''],
            'log_describe' => [' like \'%', $_GET['descript'], '%\''],
            'log_reported_time' => ['>= \'', $_GET['log_start_time'], '\''],
            'log_reported_time ' => ['<= \'', $_GET['log_end_time'], '\'']
        ];
        //选择计算正常运行率的时长
        $_SESSION['totalTime_sel'] = $_GET['totalTime_sel'];
        foreach ($_SESSION['sear'] as $k => $v) {
            if (!empty($v[1])) {
                $condition .= ' and ' . $k . $v[0] . $v[1] . $v[2];
            }
        }
        //重置分页条件
        $conditionSear = ' list_deleted=0 and !isNULL(log_first_response_time)' . $condition;
        $total = $log->where($conditionSear)->count();        
        $per = 7;
        $page = new \Component\Page($total, $per); //autoload    
        $sql = "
                select a.log_id, c.list_name, c.list_id, c.list_pid, a.log_reported_time, a.log_level, b.mg_real_name, b.mg_tel, a.log_type, a.log_phone, a.log_describe, a.log_first_response_time, a.log_completion_time, 
                        a.log_processing_method, a.log_result, a.log_status, a.log_deal_user
                from `yw_log` a
                left join `yw_manager` b
                on a.log_report_user = b.mg_id
                left join `yw_log_list` c
                on a.log_name = c.list_id
                where 1=1 and !isNull(a.log_first_response_time) and a.list_deleted=0 $condition
                order by log_id desc
                " . $page->limit;
        $info = $log->query($sql);        
        $pagelist = $page->fpage();
        //同个字段，分开命名
        $_SESSION['sear']['log_start_time'] = $_SESSION['sear']['log_reported_time'][1];
        $_SESSION['sear']['log_end_time'] = $_SESSION['sear']['log_reported_time '][1];
        //响应率（首次响应时间-提交时间 / 处理完成时间-提交时间）
        foreach ($info as $k => $v) {
            $fz = strtotime($info[$k]['log_first_response_time']) - strtotime($info[$k]['log_reported_time']);
            $fm = strtotime($info[$k]['log_completion_time']) - strtotime($info[$k]['log_reported_time']);
            $info[$k]['round_time'] = round($fz / $fm * 100, 2) . '%';
        }
        //总响应率
        foreach ($info as $k => $v) {
            $fz1 += (strtotime($info[$k]['log_first_response_time']) - strtotime($info[$k]['log_reported_time']));
            $fm1 += (strtotime($info[$k]['log_completion_time']) - strtotime($info[$k]['log_reported_time']));
            $totalTime['total_round_time'] = round($fz1 / $fm1 * 100, 2) . '%';
        }
        //正常运行率（1月总时长-总故障时间 / 1月的总时长）
        foreach ($info as $k => $v) {
            $fw += (strtotime($info[$k]['log_completion_time']) - strtotime($info[$k]['log_reported_time']));
            $fzc = $_SESSION['totalTime_sel'] * 24 * 3600 - $fw;
            $fmonth = $_SESSION['totalTime_sel'] * 24 * 3600;
            $totalTime['zc'] = round($fzc / $fmonth * 100, 2) . '%';
        }
        if (empty($totalTime)) {
            $totalTime['total_round_time'] = '0%';
            $totalTime['zc'] = '0%';
        }
        //项目名称层级关系
        $sql = "select * from `yw_manager`";
        $userInfoa = $user->query($sql);
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $pinfoo = $logg->query($sql);
        $pinfo = array_flip(array_column($pinfoo, 'list_id', 'list_name'));
        $zsql = "select * from `yw_log_list` where list_deleted=0";
        $zlog = $logg->query($zsql);
        $this->assign('pinfoo', $pinfoo);
        $this->assign('zlog', $zlog);
        //拼装管理员数组
        $userInfo = array_flip(array_column($userInfoa, 'mg_id', 'mg_real_name'));
        $userInfot = array_flip(array_column($userInfoa, 'mg_id', 'mg_tel'));
        $this->assign('info', $info);
        $this->assign('userInfo', $userInfo);
        $this->assign('userInfot', $userInfot);
        $this->assign('pinfo', $pinfo);
        $this->assign('pagelist', $pagelist);
        //总响应率
        $this->assign('totalTime', $totalTime);
        $this->display();
    }

    function showlistRegular() {
        $log = D("log");
        $total = $log->count();
        $per = 7;
        $page = new \Component\Page($total, $per); //autoload        
        $sql = "
                select a.log_id, c.list_name, c.list_pid, a.log_reported_time, a.log_level, b.mg_real_name, b.mg_tel, a.log_type, a.log_describe, a.log_first_response_time, a.log_completion_time, 
                        a.log_processing_method, a.log_result, a.log_status, a.log_deal_user
                from `yw_log` a
                left join `yw_manager` b
                on a.log_report_user = b.mg_id
                left join `yw_log_list` c
                on a.log_name = c.list_id
		where 1=1 and a.list_deleted=0
                order by log_id desc
                " . $page->limit;
        $info = $log->query($sql);
        $pagelist = $page->fpage();
        $logg = D("log_list");
        $user = D("manager");
        $sql = "select * from `yw_manager`";
        $userInfoa = $user->query($sql);
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $pinfoo = $logg->query($sql);
        $pinfo = array_flip(array_column($pinfoo, 'list_id', 'list_name'));
        //拼装管理员数组
        $userInfo = array_flip(array_column($userInfoa, 'mg_id', 'mg_real_name'));
        $userInfot = array_flip(array_column($userInfoa, 'mg_id', 'mg_tel'));
        $this->assign('info', $info);
        $this->assign('userInfo', $userInfo);
        $this->assign('userInfot', $userInfot);
        $this->assign('pinfo', $pinfo);
        $this->assign('pagelist', $pagelist);
        $this->display();
    }

    //公共池
    function suspendList() {
        $log = D("log");
        $logg = D("log_list");
        $user = D("manager");
        $_SESSION['sear'] = [
            'log_describe' => [' like \'%', $_GET['log_describe'], '%\'']
        ];
        foreach ($_SESSION['sear'] as $k => $v) {
            if (!empty($v[1])) {
                $condition .= ' and ' . $k . $v[0] . $v[1] . $v[2];
            }
        }
        //重置分页条件
        $conditionSear = ' list_deleted=0 and isNULL(log_first_response_time)' . $condition;
        $total = $log->where($conditionSear)->count();
        $per = 7;
        $page = new \Component\Page($total, $per); //autoload 
        $sql = "
                select a.log_id, c.list_name, c.list_pid, a.log_reported_time, a.log_level, b.mg_real_name, b.mg_tel, a.log_type, a.log_phone, a.log_describe, a.log_first_response_time, a.log_completion_time, 
                        a.log_processing_method, a.log_result, a.log_status, a.log_deal_user
                from `yw_log` a
                left join `yw_manager` b
                on a.log_report_user = b.mg_id
                left join `yw_log_list` c
                on a.log_name = c.list_id
		where 1=1 and isNull(a.log_first_response_time) and a.list_deleted=0 $condition
                order by log_id desc
                " . $page->limit;
        $info = $log->query($sql);
        $pagelist = $page->fpage();
        $sql = "select * from `yw_manager`";
        $userInfoa = $user->query($sql);
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $pinfoo = $logg->query($sql);
        $pinfo = array_flip(array_column($pinfoo, 'list_id', 'list_name'));
        //拼装管理员数组
        $userInfo = array_flip(array_column($userInfoa, 'mg_id', 'mg_real_name'));
        $userInfot = array_flip(array_column($userInfoa, 'mg_id', 'mg_tel'));
        $this->assign('info', $info);
        $this->assign('userInfo', $userInfo);
        $this->assign('userInfot', $userInfot);
        $this->assign('pinfo', $pinfo);
        $this->assign('pagelist', $pagelist);
        $this->display();
    }

    function addRegular() {
        $plog = D("log");
        $zlog = D("log_list");
        //大类列表（select下拉/短信项目名称）
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $pdlog = $plog->query($sql);
        if (!empty($_POST)) {
            //插入数据（不能在create下面去implode）
            $_POST['log_deal_user'] = implode(",", $_POST['log_deal_user']);
            $_POST['log_report_user'] = $_SESSION['mg_id'];
            $_POST['log_reported_time'] = date('Y-m-d H:i:s', time());
            $cc = $plog->create();            
            $z = $plog->add();
            if ($z) {
                $sql = "select * from `yw_log` where list_deleted=0 and log_id=" . $z;
                $SMSdata = $plog->query($sql);
                //短信项目名称                
                $SMSdataId = $SMSdata[0]['log_name'];
                $zisql = "select * from `yw_log_list` where  list_deleted=0 and list_id=" . $SMSdataId;
                $zilei = $zlog->query($zisql);
                $dalei = array_flip(array_column($pdlog, 'list_id', 'list_name'));
                $projectName = $dalei[$zilei[0]['list_pid']] . ' - ' . $zilei[0]['list_name'];
                //短信用户信息
                $SMSdataUser = $SMSdata[0]['log_report_user'];
                $Usersql = "select * from `yw_manager` where mg_deleted=0 and mg_id=" . $SMSdataUser;
                $UserData = $zlog->query($Usersql);
                $SMSdataUser = $UserData[0]['mg_real_name'] . '：' . $SMSdata[0]['log_phone'];
                //短信时间,内容
                $SMStime = $SMSdata[0]['list_updated'];
                $SMScontent = '亲爱的运维同学：您的小伙伴儿（' . $SMSdataUser . '）报告 "' . $projectName . '" 项目发生故障，请你尽快处理！【智美高科】';
                //发短信
                $SMS = new \Component\SMS($SMScontent, $SMStime);
                $SMS->sendSMS();
                echo '<script>alert("添加日志成功！");window.location.href="../Server/addRegular";</script>';
            } else {
                $this->error('添加日志失败', U('Server/addRegular'));
            }
        }
        //小类（select下拉）
        $zsql = "select * from `yw_log_list` where list_deleted=0";
        $zlog = $zlog->query($zsql);
        $this->assign('plog', $pdlog);
        $this->assign('zlog', $zlog);
        $this->assign('Errors', $Errors);
        $this->display();
    }

    function add() {
        $plog = D("log");
        $zlog = D("log_list");
        if (!empty($_POST)) {
            $_POST['log_deal_user'] = implode(",", $_POST['log_deal_user']);
            $cc = $plog->create();
            $z = $plog->add();
            if ($z) {
                echo '<script>alert("添加日志成功！");window.location.href="../Server/add";</script>';
            } else {
                $this->error('添加日志失败', U('Server/showlist'));
            }
        }
        //显示下拉层级列表
        $sql = "select * from `yw_log_list` where list_pid=0 and list_deleted=0";
        $plog = $plog->query($sql);
        $zsql = "select * from `yw_log_list` where list_deleted=0";
        $zlog = $zlog->query($zsql);
        $this->assign('plog', $plog);
        $this->assign('zlog', $zlog);
        $this->assign('Errors', $Errors);
        $this->display();
    }

    //ajax检查用户是否存在
    function checkUser() {
        $manager = D("manager");
        if (!empty($_GET)) {
            $reportUser = trim($_GET['reportUser']);
            $sql = "select mg_real_name,mg_id from `yw_manager` where mg_deleted=0 and mg_real_name='" . $reportUser . "'";           
           // echo $sql;exit;
            
            $user = $manager->query($sql);
            if ($user) {
                echo $user[0]['mg_id'];
            } else {
                echo 1;
            }
        } else {
            echo 0;
        }
    }

    function upd() {
        $plog = D("log");
        $log_id = htmlentities($_GET['log_id']);
        if (!empty($_POST)) {
            $_POST['log_deal_user'] = implode(",", $_POST['log_deal_user']);
            $plog->where('log_id=' . $log_id)->create();
            $z = $plog->save();
            if ($z) {
                $dealUser = $plog->where("log_id=%d",$log_id)->select();
                $dealUserMobile = $_SESSION['mg_tel'];
                $dealUserName = $_SESSION['mg_realname'];
                $content = $dealUser[0]['log_processing_method'];
                $mobile = $dealUser[0]['log_phone'];
                //短信时间,内容
                $SMStime = $dealUser[0]['list_updated'];
                $SMScontent = '亲爱的小伙伴儿，您的故障已被处理，处理方式是“ '.$content.' ”，处理人【 '.$dealUserName.'：'.$dealUserMobile.' 】。感谢您对智美运维工作的支持！【智美高科】';
                //发短信
                $SMS = new \Component\SMS($SMScontent, $SMStime, $mobile);
                $SMS->sendSMS();                
                $this->redirect('Server/showlist');
            } else {
                $this->error('执行日志失败', U('Server/showlist'));
            }
        }
        $sql = "select * from `yw_log` where list_deleted=0 and log_id=" . $log_id;
        $plog = $plog->query($sql);
        $dealUser = explode(",", $plog[0]['log_deal_user']);
        $this->assign('plog', $plog[0]);
        $this->assign('dealUser', $dealUser);
        $this->display();
    }

    function del() {
        $plog = D("log");
        $log_id = htmlentities($_GET['log_id']);
        if (!empty($log_id)) {
            $_POST['list_deleted'] = 1;
            $plog->where('log_id=' . $log_id)->create();
            $z = $plog->save();
            if ($z) {
                $this->redirect("Server/showlist");
            } else {
                $this->error("删除日志失败", U('Server/showlist'));
            }
        }
        $this->display();
    }

    function delSuspend() {
        $plog = D("log");
        $log_id = htmlentities($_GET['log_id']);
        if (!empty($log_id)) {
            $_POST['list_deleted'] = 1;
            $plog->where('log_id=' . $log_id)->create();
            $z = $plog->save();
            if ($z) {
                $this->redirect("Server/suspendList");
            } else {
                $this->error("删除日志失败", U('Server/suspendList'));
            }
        }
        $this->display();
    }

    //退出系统
    function logout() {
        session(null);
        $this->redirect("Manager/login");
    }

}
