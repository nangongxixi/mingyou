<?php

namespace Admin\Controller;

use Component\AdminController;

class ManagerController extends AdminController
{

    function login()
    {
        if (!empty($_POST)) {
            //验证码校验       
            $verify = new \Think\Verify();
            if ($verify->check($_POST['captcha']) != 1) {
                $errors = "验证码错误";
            } else {
                //判断用户名和密码，在model模型里边制作一个专门方法进行验证
                $user = new \Model\ManagerModel();
                $rst = $user->checkNamePwd($_POST['mg_username'], $_POST['mg_password']);
                if ($rst === false) {
                    $errors = "用户名或密码错误";
                } else {
                    session('mg_username', $rst['mg_name'], 5);
                    session('mg_realname', $rst['mg_real_name']);
                    session('mg_role', $rst['mg_role_id']);
                    session('mg_id', $rst['mg_id']);
                    session('mg_created', $rst['mg_created']);
                    session('mg_tel', $rst['mg_tel']);
                    if ($_SESSION['mg_role'] > 2) {
                        $this->redirect('Server/addRegular');
                    } else {
                        $this->redirect('Index/index');
                    }
                }
            }
        }
        $this->assign('lang', L());
        $this->assign('errors', $errors);
        $this->display();
    }

    //退出系统
    function logout()
    {
        session(null);
        $this->redirect("Manager/login");
    }

    //制作专门方法实现验证码生成
    function verifyImg()
    {
        //以下类Verify在之前并没有include引入
        //走自动加载Think.class.php  autoload()
        $config = array(
            'imageH' => 45, // 验证码图片高度
            'imageW' => 134,
            'fontSize' => 19,
            'fontttf' => '4.ttf', // 验证码字体，不设置随机获取
            'length' => 4, // 验证码位数
            'useCurve' => false, // 是否画混淆曲线
            'useNoise' => true, // 是否添加杂点    
        );
        ob_clean(); // 输出缓冲区 避免不显示验证码      
        $verify = new \Think\Verify($config);
        $verify->entry();
    }

    //显示列表
    function showlist()
    {
        $infop = D('Manager');
        $_SESSION['sear'] = [
            'mg_real_name' => [' like \'%', $_GET['mg_real_name'], '%\'']
        ];
        foreach ($_SESSION['sear'] as $k => $v) {
            if (!empty($v[1])) {
                $condition .= ' and ' . $k . $v[0] . $v[1] . $v[2];
            }
        }
        //重置分页条件
        $conditionSear = ltrim($condition, " and");
        $total = $infop->where($conditionSear.'mg_deleted=0')->count();
        //echo $infop->_sql();
        $per = 14;
        $page = new \Component\Page($total, $per); //autoload        
        $sql = "select * from `yw_manager` where 1=1 and mg_deleted=0 $condition order by mg_id desc " . $page->limit;
        $info = $infop->query($sql);
        $pagelist = $page->fpage();
        $rinfo = $this->getRoleInfo();
        $this->assign('rinfo', $rinfo);
        $this->assign('info', $info);
        $this->assign('pagelist', $pagelist);
        $this->display();
    }

    //详情
    function detail($mg_id){
        $info = D('Manager')->find($mg_id);
        $rinfo = $this->getRoleInfo();
        $this->assign('rinfo', $rinfo);
        $this->assign('info', $info);
        $this->display();
    }

    //新增、修改
    function add($mg_id = false)
    {
        $managerInfo = new \Model\ManagerModel();
        $manager = D('Manager');

        //图片上传
        if ($_FILES['mg_img']['size'] != 0) {
            $config = array(
                'rootPath' => './public/',  //根目录
                'savePath' => 'upload/', //保存路径
            );
            //附件被上传到路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            //uploadOne会返回已经上传的附件信息
            $z = $upload->uploadOne($_FILES['mg_img']);
            if (!$z) {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => $upload->getError(),
                ));
            } else {
                //拼装图片的路径名
                $bigimg = $z['savepath'] . $z['savename'];
                $_POST['mg_big_img'] = $bigimg;
                //把已经上传好的图片制作缩略图Image.class.php
                $image = new \Think\Image();
                //open();打开图像资源，通过路径名找到图像
                $srcimg = $upload->rootPath . $bigimg;
                $image->open($srcimg);
                $image->thumb(150, 150);  //按照比例缩小
                $smallimg = $z['savepath'] . "small_" . $z['savename'];
                $image->save($upload->rootPath . $smallimg);
                $_POST['mg_small_img'] = $smallimg;
            }
        }

        //操作数据库
        if (!empty($_POST)) {
            if (!$manager->create()) {
                $Errors = $managerInfo->getError();
            } else {
                $_POST['mg_pwd'] = md5($_POST['mg_pwd']);
                $_POST["mg_created"] = date("Y-m-d H:i:s", time());
                //判断是新增还是修改
                if ($_POST['mg_id']) {
                    $inertID = $manager->where('mg_id=' . $_POST['mg_id'])->save($_POST);
                } else {
                    $inertID = $manager->add();
                }
                if ($inertID) {
                    $this->ajaxReturn(array(
                        'status' => true,
                        'msg' => '操作成功',
                    ));
                } else {
                    $this->ajaxReturn(array(
                        'status' => false,
                        'msg' => '操作失败',
                    ));
                }
            }
        }

        //根据当前id获取详情
        if ($mg_id) {
            //获得被修改管理员的信息
            $info = D('Manager')->find($mg_id);
            $this->assign('info', $info);
        }

        //获得被修改管理员的信息            
        $rinfo = $this->getRoleInfo();
        $this->assign('rinfo', $rinfo);
        $this->assign('Errors', $Errors);
        $this->display();
    }

    //删除
    function del($mg_id = false)
    {
        $manager = D("Manager");
        $mg_id = $_POST['mg_id'];
        if (!empty($mg_id)) {
            $data["mg_deleted"] = 1;
            $inertID = $manager->where('mg_id=' . $mg_id)->save($data);
            if ($inertID) {
                $this->ajaxReturn(array(
                    'status' => true,
                    'msg' => '操作成功',
                ));
            } else {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            }
        }
        $this->display();
    }

    //获取角色列表
    function getRoleInfo()
    {
        //查询全部角色的信息
        $rrinfo = D("Role")->select(); //二维数组信息
        //array(1=>'经理',2=>'主管',3=>'总监')
        $rinfo = array();
        foreach ($rrinfo as $k => $v) {
            $rinfo[$v['role_id']] = $v['role_name']; //array(1=>'经理',2=>'主管')
        }
        return $rinfo;
    }

    //富文本图片上传
    function ck_upload($ftype = 'image'){
        if($ftype == 'image'){
            $ftype =  array('jpg', 'gif', 'png', 'jpeg', 'bmp');
        }
        header("Content-type:text/html");
        import('ORG.Net.UploadFile');
        //图片上传
        if ($_FILES['upload']['size'] != 0) {
            $config = array(
                'rootPath' => './public/',  //根目录
                'savePath' => 'upload/', //保存路径
            );
            //附件被上传到路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            //uploadOne会返回已经上传的附件信息
            $z = $upload->uploadOne($_FILES['upload']);
            if (!$z) {
                echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(1, '/', '上传失败," . $upload->getError() . "！');</script>";
            } else {
                $callback = $_REQUEST["CKEditorFuncNum"];
                $path = 'http://'.$_SERVER['HTTP_HOST'].'/public/'. $z['savepath'] . $z['savename'];
                //echo $path ;
                //echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(1,'$path','');</script>";
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$path."','');</script>";
            }
        }
    }

}
