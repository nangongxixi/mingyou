<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 16:37:33
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\Common\left.html" */ ?>
<?php /*%%SmartyHeaderCode:310815a0bd505a38836-33508989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19199c0f3eeecf1443ebc662ba42f98b01451059' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\Common\\left.html',
      1 => 1510735049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310815a0bd505a38836-33508989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0bd505ac13d',
  'variables' => 
  array (
    'pauth_info' => 0,
    'sauth_info' => 0,
    'vv' => 0,
    'v' => 0,
    'kk' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0bd505ac13d')) {function content_5a0bd505ac13d($_smarty_tpl) {?><ul class="sidebar-menu">
    <li class="header"></li>
    <!--
    <li style="cursor:pointer" class="menu active" save="caidan1"  minname="订单信息" address="/index.php/Admin/Apply/showlist">
        <a href="#">
            <i class="fa fa-paste"></i><span>订单信息</span>
        </a>
    </li>
    -->
    <li style="cursor:pointer" class="menu" save="caidan2" minname="文章列表" address="/index.php/Admin/Article/showlist">
        <a href="#">
            <i class="fa fa-paste"></i><span>文章管理</span>
        </a>
    </li>
    <li style="cursor:pointer" class="menu" save="caidan4"  minname="类别列表" address="/index.php/Admin/Category/showlist">
        <a href="#">
            <i class="fa fa-paste"></i><span>文章类别</span>
        </a>
    </li>
    <li style="cursor:pointer" class="menu" save="caidan3"  minname="用户列表" address="/index.php/Admin/Manager/showlist">
        <a href="#">
            <i class="fa fa-user"></i><span>用户管理</span>
        </a>
    </li>

</ul>

<!--
<ul class="sidebar-menu">
    <li class="header"></li>

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pauth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sauth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                    <li style="cursor:pointer" class="menu" save="caidan<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
" address="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
">
                        <a href="#">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value[$_smarty_tpl->tpl_vars['kk']->value];?>
"></i><span><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</span>
                        </a>
                    </li>
                <?php }?>
        <?php } ?>
    <?php } ?>

</ul>
-->

<script>
    var menu = localStorage.getItem('menu');
    for(var i=0; i<$('.sidebar-menu li').length; i++){
        if(menu ==$('.sidebar-menu li').eq(i).attr('save') ){
            $('.sidebar-menu li').eq(i).addClass('active');
        }
    }
</script><?php }} ?>