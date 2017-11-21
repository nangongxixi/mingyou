<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 11:10:50
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Common\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:98155a13993a231e09-29034121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ee187eaf190184b899add0fd3fb51c252785b8' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Common\\bottom.html',
      1 => 1511233587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98155a13993a231e09-29034121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a13993a26891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a13993a26891')) {function content_5a13993a26891($_smarty_tpl) {?><div class="footer">
    <div class="footer-inner clearfix">
        <div class="footer-left"><img src="<?php echo @IMG_URL;?>
log.png" alt="" class="footer_log"></div>
        <div class="footer-mid">
            <div class="footer-menu">
                <a href="/">首页</a>
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
            <p>Copyright 2016 All Rights Reserved. &nbsp; 中国名优企业品牌发展提升计划 &nbsp; &nbsp;版权所有<br></p>
        </div>

    </div>
</div><?php }} ?>