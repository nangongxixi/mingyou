<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 16:54:28
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:184325a0bd026bdc727-74485025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0d718eac5390374fb87fdabde0964764a61013f' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Index\\index.html',
      1 => 1510736066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184325a0bd026bdc727-74485025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0bd026d575f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0bd026d575f')) {function content_5a0bd026d575f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国优选品牌促进发展工程&nbsp;-&nbsp;官方网站</title>
    <meta name="keywords" content="中国优选品牌，中国优选品牌促进发展工程，优选品牌，CCTV《发现品牌》栏目">
    <meta name="description" content="中国优选品牌促进发展工程是为了深入贯彻党中央、国务院和国家有关部委关于深化经济体制改革，加强中国民族品牌建设的若干文件精神，响应中国广大企业创建中国优质品牌的强烈要求，由社会各级权威媒体组织发起，并与中央电视台联合创建了《发现•品牌》栏目，整合现有政策、权威媒体、网络资源为中国优质品牌提供品牌提升和传播的一体化窗口。
&lt;br /&gt;&amp;ltbr /&gt;中国优选品牌促进发展工程立足中国经济，面向世界，是宣传中国品牌、提升中国形象、推进中国经济与世界一体化、塑造中国企业形象的重要阵地和主要媒体。中国优选品牌促进发展工程在社会各界人士及单位的关心与支持下，拥有了越来越大的社会影响力，在推进中国经济可持续发展中发挥着应有的重要作用。">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
    <script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>
    <script src="<?php echo @JS_URL;?>
script.js"></script>
    <script src="<?php echo @JS_URL;?>
share.js"></script>
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
share_style0_16.css">
</head>
<body>
﻿
<div class="header clearfix">
    <a href="http://www.cqbpadp.com/index.php" class="logo"><img src="<?php echo @IMG_URL;?>
logo.png" alt=""></a>
    <div class="menu">
        <a href="http://www.cqbpadp.com/index.php" class="cur-menu">首页</a>
        <a href="http://www.cqbpadp.com/news.php">新闻动态</a>
        <a href="http://www.cqbpadp.com/about.php">关于工程</a>
        <a href="http://www.cqbpadp.com/fxpp.php">发现品牌</a>
        <a href="http://www.cctvfxpp.com/brand" target="_blank">优选品牌</a>
        <a href="http://www.cqbpadp.com/search.php">查询中心</a>
        <a href="http://www.cqbpadp.com/contact.php">联系我们</a>
    </div>
</div>
<div id="index"></div>
<div class="footer">
    <div class="footer-inner clearfix">
        <div class="footer-left"><img src="<?php echo @IMG_URL;?>
logo02.jpg" alt=""></div>
        <div class="footer-mid">
            <div class="footer-menu">
                <a href="http://www.cqbpadp.com/index.php">首页</a>
                <a href="http://www.cqbpadp.com/news.php">新闻动态</a>
                <a href="http://www.cqbpadp.com/about.php">关于工程</a>
                <a href="http://www.cqbpadp.com/fxpp.php">发现品牌</a>
                <a href="http://www.cqbpadp.com/yxpp.php">优选品牌</a>
                <a href="http://www.cqbpadp.com/search.php">查询中心</a>
                <a href="http://www.cqbpadp.com/contact.php">联系我们</a>
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