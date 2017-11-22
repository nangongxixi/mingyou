<?php /* Smarty version Smarty-3.1.6, created on 2017-11-22 15:44:11
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:230235a152acb91ac71-14624497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52cc19bbb21b9b7e299b964db1a4977003db952f' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\article\\detail.html',
      1 => 1509066217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230235a152acb91ac71-14624497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a152acb97889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a152acb97889')) {function content_5a152acb97889($_smarty_tpl) {?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>页面详情</title>
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

    <!--富文本编辑器-->
    <script src="<?php echo @STATIC_URL;?>
ckeditor/ckeditor.js"></script>
    <script src="<?php echo @STATIC_URL;?>
ckeditor/samples/js/sample.js"></script>

</head>

<body class="skin-blue sidebar-mini">


        <div class="box-body">
            <form  method="post" enctype="multipart/form-data" id="formData">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th class="detail-title" style="width: 100px !important;">封面</th>
                        <td>

                                <?php if ($_smarty_tpl->tpl_vars['info']->value['imgArr']){?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['imgArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" width="60"  height="60" style="display: block; float: left; margin-right: 8px">
                                    <?php } ?>
                                <?php }else{ ?>
                                    <img src="/public/Admin/img/upimg.png" width="60"  height="60" style="display: block; float: left; margin-right: 8px">
                                <?php }?>


                    </tr>
                    <tr>
                        <th class="detail-title">标题</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</td>
                    </tr>
                    <tr>
                        <th class="detail-title">内容</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</td>
                    </tr>



                    <!--
                    <tr>
                        <th>性别</th>
                        <td>
                            <div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="optionsRadios" id=""
                                               value="0" checked="">
                                        男
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="optionsRadios" id=""
                                               value="1">
                                        女
                                    </label>
                                </div>

                            </div>
                        </td>
                    </tr>
                    -->
                    </tbody>
                </table>
            </form>
        </div>

</body></html><?php }} ?>