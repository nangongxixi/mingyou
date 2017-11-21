<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 14:12:03
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\List\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:156985a13c18f50cfe3-54246040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b4ba64eb2fd283f92d6d5122cb206ca0685b46' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\List\\detail.html',
      1 => 1511244722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156985a13c18f50cfe3-54246040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a13c18f543af',
  'variables' => 
  array (
    'other' => 0,
    'Detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a13c18f543af')) {function content_5a13c18f543af($_smarty_tpl) {?><span id="head"></span>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
<script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'])){?>
<div style="margin: 0 auto; margin: 0 0 35px"><img width="100%" src="/<?php echo $_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'];?>
" height="150"></div>
<?php }?>

<div class="main">
    <div class="w120">
        <div class="le abo_le">
            <ul>
            </ul>
        </div>
        <div class="ri news_detail">
            <div class="news_detail_top">
                <h5><?php echo $_smarty_tpl->tpl_vars['Detail']->value['title'];?>
</h5>
                <span><?php echo $_smarty_tpl->tpl_vars['Detail']->value['createtime'];?>
</span>&nbsp;&nbsp;&nbsp;<span>
			</span></div>
            <div class="cl"></div>
            <div class="news_detail_conient">
                <?php echo $_smarty_tpl->tpl_vars['Detail']->value['content'];?>

            </div>
            <!-- 上下页 -->
            <div class="cl"></div>
        </div>
        <div class="cl"></div>
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