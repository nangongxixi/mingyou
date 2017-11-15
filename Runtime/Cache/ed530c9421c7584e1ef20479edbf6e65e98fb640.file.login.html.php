<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 13:47:41
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:307715a0bd4fd5ed024-56292135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed530c9421c7584e1ef20479edbf6e65e98fb640' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\Manager\\login.html',
      1 => 1509434586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307715a0bd4fd5ed024-56292135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0bd4fd646db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0bd4fd646db')) {function content_5a0bd4fd646db($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>米袋金融</title>
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

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <style>
        /*web background*/
        .container {
            display: table;
            height: 100%;
        }

        .row {
            display: table-cell;
            vertical-align: middle;
        }

        /* centered columns styles */
        .row-centered {
            text-align: center;
        }

        .col-centered {
            display: inline-block;
            float: none;
            text-align: left;
            margin-left: 50%;
        }

        .bodycss {
            background-color: rgba(255, 255, 255, 0.4) !important;
            position: absolute;
            top: 0;
            margin-left: 37.5%;
            margin-top: 13%;
            -moz-box-shadow: 0px 0px 5px #808080;
            -webkit-box-shadow: 0px 0px 5px #808080;
            box-shadow: 0px 0px 5px #808080;
            border-radius: 10px;
            width: 390px;
            color: aliceblue;
            box-shadow: 0px 0px 20px 0px #819e99;
        }
    </style>


    <![endif]-->
</head>

<body class="skin-blue sidebar-mini"
      style="height: auto; min-height: 80%; background-image:url(<?php echo @ADMIN_IMG_URL;?>
bgpic.jpg); background-size: 100%; overflow: hidden">

<DIV class="large-header" id="large-header">
    <CANVAS id="demo-canvas"></CANVAS>
    <div class="well col-md-3 col-centered " style=" background-color: rgba(255,255,255,0.4) !important;
            position:absolute;
            top:0;
            margin-left: 37.5%;
            margin-top: 13%;
            -moz-box-shadow:0px 0px 5px #808080;
            -webkit-box-shadow:0px 0px 5px #808080;
            box-shadow:0px 0px 5px #808080;
            border-radius: 10px;
            width: 390px;
            color: aliceblue;
            box-shadow: 0px 0px 20px 0px #819e99;
            ">
        <h2>欢迎登录<span id="errors" style="font-size: 16px; color: red; font-weight: bold; display: inline-block; margin-left: 15px"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</span></h2>
        <br/>
        <form action="<?php echo @__SELF__;?>
" method="post" role="form">
            <div class="form-group">
                <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                        <span class="btn btn-warning dropdown-toggle id=" sizing-addon1"><i
                            class="glyphicon glyphicon-user"
                            aria-hidden="true"></i></span>
                    </div>
                    <input type="text" name="mg_username" class="form-control"
                           style="border:0px;background-color:rgba(255,255,255,0.5) !important" placeholder="请输入用户名">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                        <span class="btn btn-warning dropdown-toggle id=" sizing-addon1"><i
                            class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <input type="password" name="mg_password" class="form-control"
                           style="border:0px;background-color:rgba(255,255,255,0.5) !important" placeholder="请输入密码">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                        <span class="btn btn-danger dropdown-toggle id=" sizing-addon1"><i
                            class="glyphicon glyphicon-check"></i></span>
                    </div>

                    <input id="captcha" name="captcha" type="text" class="form-control"
                           style="border:0px;background-color:rgba(255,255,255,0.5) !important; width:150px"
                           placeholder="请输入验证码">
                    <span style="margin-left: 15px">
                        <img class="yanzm" src="<?php echo @__CONTROLLER__;?>
/verifyImg"
                             onclick="this.src=this.src+'?'"/>
                    </span>


                </div>
            </div>

            <button type="submit" id="submit" class="btn btn-block btn-success btn-lg">登录</button>

        </form>
    </div>

</DIV>

<SCRIPT src="<?php echo @STATIC_URL;?>
dist/js/TweenLite.min.js"></SCRIPT>
<SCRIPT src="<?php echo @STATIC_URL;?>
dist/js/EasePack.min.js"></SCRIPT>
<SCRIPT src="<?php echo @STATIC_URL;?>
dist/js/demo-1.js"></SCRIPT>
<script src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
<!-- layer -->
<script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>



</body>
</html>
<?php }} ?>