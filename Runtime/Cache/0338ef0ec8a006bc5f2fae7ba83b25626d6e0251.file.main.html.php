<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 22:21:49
         compiled from "D:/phpStudy/PHPTutorial/WWW/mingyou/Home/View\index\main.html" */ ?>
<?php /*%%SmartyHeaderCode:252485a0c335d76f4b1-22147132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0338ef0ec8a006bc5f2fae7ba83b25626d6e0251' => 
    array (
      0 => 'D:/phpStudy/PHPTutorial/WWW/mingyou/Home/View\\index\\main.html',
      1 => 1510755706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252485a0c335d76f4b1-22147132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0c335d81aad',
  'variables' => 
  array (
    'banner' => 0,
    'v' => 0,
    'aboutInfo' => 0,
    'pinpai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c335d81aad')) {function content_5a0c335d81aad($_smarty_tpl) {?><div class="banner">
    <div class="banner-inner" style="height: 396px;">
        <ul>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li style="opacity: 0.986194; width: 1583px; z-index: -1;">
                <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
">
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="banner-point"><span class="cur-point"></span><span class=""></span><span class=""></span></div>
</div>
<div class="main">
    <div class="pro-info clearfix">
        <div class="pro-video">
            <?php echo $_smarty_tpl->tpl_vars['aboutInfo']->value[0]['discript'];?>

        </div>
        <div class="pro-text">
            <div class="news-list-top">
                <span>工程简介</span>
            </div>
            <p style="text-indent: 2em;">
                <?php echo $_smarty_tpl->tpl_vars['aboutInfo']->value[0]['advantage'];?>

            </p></div>
    </div>
    <div class="pro-list">
        <div class="news-list-top" style="margin-bottom: 8px">
            <span>名优品牌</span>
        </div>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pinpai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li>
                <a class="pro-list-video">
                    <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" alt="">
                    <div class="video-btm-text">
                        <p class="video-p1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                        <!--<p>China Quality Brand</p>-->
                    </div>
                </a>
                <div class="pro-list-text"><?php echo $_smarty_tpl->tpl_vars['v']->value['discript'];?>
</div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="pro-nav"><a><img src="<?php echo @IMG_URL;?>
nav01.jpg" alt=""></a></div>
    <div class="pro-btm clearfix">
        <div class="pro-left">
            <div class="clearfix">
                <div class="news-banner">
                    <div class="news-banner-inner">
                        <ul>
                            <li style="opacity: 0.0138062; z-index: 1;">
                                <a href="http://www.cqbpadp.com/news_detail.php?id=23"><img
                                        src="<?php echo @IMG_URL;?>
2016091314080341.jpg" alt=""></a>
                                <p>央视正式启动“国家品牌计划”</p>
                            </li>

                            <li style="opacity: 0.986194; z-index: -1;">
                                <a href="http://www.cqbpadp.com/news_detail.php?id=2"><img
                                        src="<?php echo @IMG_URL;?>
2016080718432741.jpg" alt=""></a>
                                <p>“中国优选品牌促进发展工程”在京启动</p>
                            </li>

                        </ul>
                    </div>
                    <div class="news-banner-point"><span class=""></span><span class="cur-news-point"></span></div>
                </div>
                <div class="news-list">
                    <div class="news-list-top">
                        <a href="http://www.cqbpadp.com/news.php">更多&gt;&gt;</a>
                        <span>新闻动态</span>
                    </div>
                    <ul>
                        <li><a href="http://www.cqbpadp.com/news_detail.php?id=23">央视正式启动“国家品牌计划”</a></li>
                        <li><a href="http://www.cqbpadp.com/news_detail.php?id=2">“中国优选品牌促进发展工程”在京启动</a></li>
                    </ul>
                </div>
            </div>
            <div class="my-partner">
                <div class="news-list-top">
                    <span>我的合作伙伴</span>
                </div>
                <ul>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715521576.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715541276.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715065659.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715304475.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715480830.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080714335369.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715315269.jpg"></li>
                    <li><img src="<?php echo @IMG_URL;?>
2016080715123261.jpg"></li>
                </ul>
            </div>
        </div>
        <div class="pro-right">
            <h5 class="pro-right-title">品牌专家</h5>
            <ul>
                <li class="clearfix" style="background: rgb(227, 226, 226);">
                    <a class="per-head"><img src="<?php echo @IMG_URL;?>
2016072210103066.jpg" alt=""></a>
                    <div class="per-info">
                        <a class="per-name">陈富国</a>
                        <p>最佳中国品牌价值排行榜的设计者</p>
                        <p>北京师范大学心理学博士学位</p>
                        <p>获得中欧国际商学院EMBA学位</p></div>
                </li>
                <li class="clearfix">
                    <a class="per-head"><img src="<?php echo @IMG_URL;?>
2016080714115926.jpg" alt=""></a>
                    <div class="per-info">
                        <a class="per-name">曹越</a>
                        <p>山东大学品牌经济研究中心副主任</p>
                        <p>《BCSOK：品牌建设体系》</p>
                        <p>致力于品牌型组织的研究与推广</p></div>
                </li>
                <li class="clearfix" style="background: rgb(227, 226, 226);">
                    <a class="per-head"><img src="<?php echo @IMG_URL;?>
2016080714192949.jpg" alt=""></a>
                    <div class="per-info">
                        <a class="per-name">洪海江</a>
                        <p>《颠覆式融合：全网品牌营销革命》</p>
                        <p>《基于新媒体互动式广告的相关探索》</p>
                        <p>南京师范大学现代广告品牌研究中心主任</p></div>
                </li>
                <li class="clearfix">
                    <a class="per-head"><img src="<?php echo @IMG_URL;?>
2016080714141277.jpg" alt=""></a>
                    <div class="per-info">
                        <a class="per-name">孙丰国</a>
                        <p>湘潭大学文学与新闻学院广告学系副教授</p>
                        <p>《品牌研究》研究生课程</p>
                        <p>《广告促动经济发展》，《广告研究》</p></div>
                </li>
                <li class="clearfix" style="background: rgb(227, 226, 226);">
                    <a class="per-head"><img src="<?php echo @IMG_URL;?>
2016080714163456.jpg" alt=""></a>
                    <div class="per-info">
                        <a class="per-name">许屹松</a>
                        <p>北京大学CBO（首席品牌官）</p>
                        <p>中国品牌领袖联盟（CBLC）副秘书长</p>
                        <p>BAC国际品牌认定委员会中国区副秘书长</p></div>
                </li>
            </ul>
        </div>
    </div>
</div><?php }} ?>