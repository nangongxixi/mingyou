<?php /* Smarty version Smarty-3.1.6, created on 2017-11-16 14:57:02
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:114235a0d36be13abe5-55150342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672e179747e2b8dd07ad5e4ced67a79ec5bda846' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\index\\index.html',
      1 => 1510814973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114235a0d36be13abe5-55150342',
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
  'unifunc' => 'content_5a0d36be1987f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d36be1987f')) {function content_5a0d36be1987f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo @SITE_NAME;?>
</title>
    <meta name="keywords" content="<?php echo @SITE_KEYWORDS;?>
">
    <meta name="description" content="<?php echo @SITE_DESCRIPTION;?>
">

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
    <script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>
    <script src="<?php echo @JS_URL;?>
script.js"></script>
    <script src="<?php echo @JS_URL;?>
share.js"></script>

    <!-- 图片滚动 -->
    <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.SuperSlide.2.1.1.js"></script>

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
share_style0_16.css">



</head>
<body>
<div class="header clearfix">
    <a href="http://www.cqbpadp.com/index.php" class="logo"><img src="<?php echo @IMG_URL;?>
log.png" alt=""></a>
    <div class="menu">
        <a href="http://www.cqbpadp.com/index.php" class="cur-menu">首页</a>
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
<div id="index"></div>
<div class="footer">
    <div class="footer-inner clearfix">
        <div class="footer-left"><img src="<?php echo @IMG_URL;?>
logo02.jpg" alt=""></div>
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
            <p>Copyright 2016 All Rights Reserved. &nbsp; 中国优选品牌促进发展工程 &nbsp; &nbsp;版权所有<br></p>
        </div>

    </div>
</div>


<script>
    $(function () {

        var homeSite = sessionStorage.getItem('homeSite');
        var homeIndex = sessionStorage.getItem('homeIndex');

        if (homeSite) {
            $('#index').load(homeSite);//默认加载首页
        } else {
            $('#index').load('/index.php/Home/index/main');//默认加载首页
        }
        $('.nav a').eq(homeIndex).addClass('nav-on').siblings().removeClass();//加载保存的样式

        //导航
        $('.nav a').click(function () {
            $('#index').html("");
            $(this).addClass('nav-on').siblings().removeClass();
            var index = $(this).index();
            if (index == 1) {
                $url = '/index.php/Home/Car/index/catid/3/catname/车贷'; //车贷
            } else if (index == 2) {
                $url = '/index.php/Home/Car/index/catid/4/catname/房贷'; //房贷
            } else if (index == 3) {
                $url = '/index.php/Home/Car/index/catid/5/catname/信用贷';//信用贷
            } else if (index == 4) {
                $url = '/index.php/Home/Car/index/catid/6/catname/保单贷';//保单贷
            } else if (index == 5) {
                $url = '/index.php/Home/Case/index/catid/9';//成功案例
            } else if (index == 6) {
                $url = '/index.php/Home/About/index/catid/11';//关于我们
            } else {
                $url = '/index.php/Home/index/main';
            }
            $('#index').load($url);
            sessionStorage.setItem('homeSite', $url);
            sessionStorage.setItem('homeIndex', index);
        })

        //子页面
        $(document).on('click', '#myscrollbox li,.detailInfo', function () {
            var id = $(this).attr('detailId');
            var url = '/index.php/Home/Car/detail/id/' + id;
            $('#index').load(url);
            sessionStorage.setItem('homeSite', url);
        });

        //攻略-更多
        $(document).on('click', '.manual-more', function () {
            var catid = $(this).attr('catid');
            var catname = $(this).attr('catname');
            var url = '/index.php/Home/manual/index/catid/' + catid + '/catname/' + catname;
            $('#index').load(url);
            sessionStorage.setItem('homeSite', url);
        });

        //攻略-详情
        $(document).on('click', '.manual-li', function () {
            var manualid = $(this).attr('manualid');
            var url = '/index.php/Home/manual/detail/id/' + manualid;
            $('#index').load(url);
            sessionStorage.setItem('homeSite', url);
        });


        //打开咨询窗口
        $(document).on('click', '.ask', function () {
            window.open("http://www16.53kf.com/webCompany.php?arg=10161753&amp;style=1&amp;language=cn&amp;charset=GBK&amp;kflist=off&amp;kf=&amp;zdkf_type=1&amp;referer=http%3A%2F%2Fwww.scmidai.com%2F&amp;keyword=&amp;tfrom=1&amp;tpl=crystal_blue&amp;uid=9469d95cc13f1e69b1a27b8527c440bf&amp;timeStamp=1502931683656&amp;ucust_id=");
        });

        //点击首页成功案例
        $(document).on('click', '.ys', function () {
            $url = '/index.php/Home/Case/index/catid/9';//成功案例
            $('#index').load($url);
            sessionStorage.setItem('homeSite', $url);
            sessionStorage.setItem('homeIndex', index);
        });


    });
</script>

</body>
</html><?php }} ?>