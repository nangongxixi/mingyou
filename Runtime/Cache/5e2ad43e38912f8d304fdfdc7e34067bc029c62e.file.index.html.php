<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 16:05:11
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Page\index.html" */ ?>
<?php /*%%SmartyHeaderCode:156095a139badb57f06-84017585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e2ad43e38912f8d304fdfdc7e34067bc029c62e' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Page\\index.html',
      1 => 1511251510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156095a139badb57f06-84017585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a139badbb1c9',
  'variables' => 
  array (
    'other' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a139badbb1c9')) {function content_5a139badbb1c9($_smarty_tpl) {?><span id="head"></span>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
<script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'])){?>
<div style="margin: 0 auto; margin: 0 0 35px"><img width="100%" src="/<?php echo $_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'];?>
" ></div>
<?php }?>
<div class="main"><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['content'];?>
</div>

<span id="bottom"></span>


<script>
    $(function () {
        $('#head').load('/index.php/Home/Common/head');
        $('#bottom').load('/index.php/Home/Common/bottom');
    });
</script>
<?php }} ?>