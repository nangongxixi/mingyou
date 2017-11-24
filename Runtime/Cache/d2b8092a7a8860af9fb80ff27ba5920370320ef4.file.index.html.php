<?php /* Smarty version Smarty-3.1.6, created on 2017-11-24 09:24:23
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:279685a0bd504d7c464-94673424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b8092a7a8860af9fb80ff27ba5920370320ef4' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\Index\\index.html',
      1 => 1511355261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279685a0bd504d7c464-94673424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0bd504df560',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0bd504df560')) {function content_5a0bd504df560($_smarty_tpl) {?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @SITE_NAME;?>
</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/skins/skin-blue.min.css">

    <!-- ./wrapper -->
    <script src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
    <!-- layer -->
    <script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>
    <!-- 日期插件 -->
    <script src="<?php echo @STATIC_URL;?>
laydate/laydate.js"></script>

    <!--表单验证 -->
    <script src="<?php echo @STATIC_URL;?>
js/Validform_v5.3.2_min.js"></script>

    <!--富文本编辑器-->
    <script src="<?php echo @STATIC_URL;?>
ckeditor/ckeditor.js"></script>
    <script src="<?php echo @STATIC_URL;?>
ckeditor/samples/js/sample.js"></script>

</head>

<body class="skin-blue sidebar-mini">

<div class="wrapper" style="height: 800px;">

    <header class="main-header">

        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>名优</b></span><b>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">名优企业</span>
        </b></a><b>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" target="_blank">
                            <i class="fa fa-home" style="font-size: 24px"></i>
                        </a>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo @ADMIN_IMG_URL;?>
defaulthead.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs rolename">管理员</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo @ADMIN_IMG_URL;?>
defaulthead.png" class="img-circle"
                                     alt="User Image">
                                <p>
                                <div style="color:rgba(255, 255, 255, 0.8)" class="rolename"></div>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <span id="modypwd" class="btn btn-default btn-flat">修改密码</span>
                                    <a href="<?php echo @__MODULE__;?>
/manager/logout" id="loginout" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </b></header>
    <!-- Left side column. contains the logo and sidebar -->

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo @ADMIN_IMG_URL;?>
defaulthead.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p class="rolename">管理员</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <span id="left"></span>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span id="bkname">用户管理</span>
                <small class="bkname">用户列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active bkname">用户列表</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content" id="content">

        </section>
        <div style="clear: both"></div>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <span style="color:#acacac">中国名优企业品牌发展提升计划</span>
        </div>
        <strong>Copyright © 2017-2018 .</strong> All rights
        reserved.
    </footer>
</div>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo @STATIC_URL;?>
bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo @STATIC_URL;?>
dist/js/app.min.js"></script>

<script>
    //时间选择器
    //执行一个laydate实例
    laydate.render({
        elem: '#begintime', //指定元素
        type: 'datetime'
    });
    laydate.render({
        elem: '#endtime', //指定元素
        type: 'datetime'
    });
</script>

<script>
    $(function () {

        $("#left").load('../Common/left.html');//加载左侧栏目列表

        //默认加载当前点击过的页面
        var address = localStorage.getItem('address');

        //默认加载的页面
        if(address==null){
            address = '../Apply/showlist';
            $('#bkname').html('订单信息');
            $('.bkname').html('订单列表');
        }


        $('#content').load(address);

        //点击左侧菜单的谁改变谁
        $(document).on('click', 'li[save^=caidan]', function () {
            var address = $(this).attr('address');
            var save = $(this).attr('save');
            localStorage.setItem('menu', save);
            localStorage.setItem('address', address);//子页面地址
            $(this).addClass('active').siblings().removeClass('active');
            $('#content').load(address);
            $('#bkname').html($(this).find('span').html());
            $('.bkname').html($(this).attr('minname'));
        });

        //点击分页页码的时候
        $(document).on('click', '.pagefy', function () {
            $('#content').load($(this).attr('href'));
            var address = $(this).attr('href');
            localStorage.setItem('address', address);//子页面地址
            return false;
        });

        //点击列表上的搜索的时候
        $(document).on('click', '#search', function () {
            var address = $(this).attr('href');
            var obj = $('.box-tools').find('select,input');

            //保存搜索条件
            var inputVal = {};
            var searAddress = '';
            for(var i=0; i<obj.length;i++){
                var name = obj.eq(i).attr('name');
                var val = obj.eq(i).val();
                if(val){
                    inputVal[name] = val;
                    searAddress+=name+'/'+val+'/';
                }
            }

            localStorage.setItem('searArr', JSON.stringify(inputVal));
            var href = address + '/' +searAddress.substring(0,searAddress.length-1);//拼接查询地址 index.php/Admin/Manager/showlist?name=XXX&age=25
            localStorage.setItem('address', href);//子页面地址
            $('#content').load(href);
        });


        //重置搜索条件
        $(document).on('click', '#reset', function () {
            var address = $(this).attr('href');
            localStorage.removeItem('searArr');//子页面地址
            localStorage.setItem('address', address);//子页面地址
            $('#content').load(address);
        });

        //打开首页
        $('.dropdown-toggle').click(function(){
            window.open('/index.php/Home/Index');
        });

    });
</script>

</body>
</html>
<?php }} ?>