<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 13:12:01
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Common\head.html" */ ?>
<?php /*%%SmartyHeaderCode:192895a1398e1a81821-11879806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba666cab9bc93fbd58ecdbb3f3b97a5aa91e882c' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Common\\head.html',
      1 => 1511237816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192895a1398e1a81821-11879806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a1398e1abc1b',
  'variables' => 
  array (
    'navList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1398e1abc1b')) {function content_5a1398e1abc1b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo @SITE_NAME;?>
</title>
    <meta name="keywords" content="<?php echo @SITE_KEYWORDS;?>
">
    <meta name="description" content="<?php echo @SITE_DESCRIPTION;?>
">

    <script src="<?php echo @JS_URL;?>
script.js"></script>
    <script src="<?php echo @JS_URL;?>
share.js"></script>

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
share_style0_16.css">

</head>
<body>
<div class="header clearfix">
    <a href="/" class="logo"><img src="<?php echo @IMG_URL;?>
log.png" alt=""></a>
    <div class="menu">
        <a href="/" class="cur-menu">首页</a>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['category_name'];?>
</a>
        <?php } ?>
    </div>
</div>


<script>
    $(function () {
        $('.menu a').eq(sessionStorage.getItem('site-index')).addClass('cur-menu').siblings().removeClass('cur-menu');
        $('.menu a').click(function () {
            $(this).addClass('cur-menu').siblings().removeClass('cur-menu');
            sessionStorage.setItem('site-index', $(this).index());
        });
    });
</script>

<?php }} ?>