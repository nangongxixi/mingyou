<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 16:05:18
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\List\index.html" */ ?>
<?php /*%%SmartyHeaderCode:212375a13b7c238bb30-38051393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61a5c27d5debb7705c35c7f14048f1145be937f' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\List\\index.html',
      1 => 1511251490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212375a13b7c238bb30-38051393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a13b7c23c264',
  'variables' => 
  array (
    'other' => 0,
    'ListInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a13b7c23c264')) {function content_5a13b7c23c264($_smarty_tpl) {?><span id="head"></span>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
<script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'])){?>
<div style="margin: 0 auto; margin: 0 0 35px"><img width="100%" src="/<?php echo $_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'];?>
"></div>
<?php }?>

<div class="main">
    <div class="news">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ListInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li class="clearfix">
                <a href="/index.php/Home/List/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="news-left">
                    <?php if (isset($_smarty_tpl->tpl_vars['v']->value['img_url'])){?>
                    <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" width="380px" height="200px" alt="">
                    <?php }else{ ?>
                    <img src="<?php echo @IMG_URL;?>
default.jpg" width="380px" height="200px" alt="">
                    <?php }?>
                </a>
                <div class="news-right">
                    <h5 class="news-title">
                        <a href="/index.php/Home/List/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                    </h5>
                    <div class="news-date">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['createtime'];?>
</span>
                        <span>阅读：<?php echo $_smarty_tpl->tpl_vars['v']->value['click'];?>
</span>
                    </div>
                    <div class="news-text"><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
</div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<span id="bottom"></span>


<script>
    $(function () {
        $('#head').load('/index.php/Home/Common/head');
        $('#bottom').load('/index.php/Home/Common/bottom');
    });
</script>
<?php }} ?>