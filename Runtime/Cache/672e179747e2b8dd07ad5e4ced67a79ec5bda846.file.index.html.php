<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 11:20:21
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:114235a0d36be13abe5-55150342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672e179747e2b8dd07ad5e4ced67a79ec5bda846' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\index\\index.html',
      1 => 1511234418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114235a0d36be13abe5-55150342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0d36be1987f',
  'variables' => 
  array (
    'banner' => 0,
    'v' => 0,
    'aboutInfo' => 0,
    'pinpai' => 0,
    'kk' => 0,
    'vv' => 0,
    'middleInfo' => 0,
    'news' => 0,
    'indexBanner' => 0,
    'pinpaizb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d36be1987f')) {function content_5a0d36be1987f($_smarty_tpl) {?>
<span id="head"></span>
<script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>

<!-- 图片滚动 -->
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.SuperSlide.2.1.1.js"></script>

<!-- 新闻图切换 -->
<link href="<?php echo @CSS_URL;?>
jquery.slideBox.css" rel="stylesheet" type="text/css">
<script src="<?php echo @JS_URL;?>
jquery.slideBox.min.js" type="text/javascript"></script>
<script>
    jQuery(function ($) {
        $('#demo1').slideBox({
            duration: 0.3,//滚动持续时间，单位：秒
            delay: 7,//滚动延迟时间，单位：秒
            startIndex: 1//初始焦点顺序
        });
    });
</script>

<!--banner开始-->
<div class="fullSlide">
    <div class="bd">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li _src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" style="background:url(/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
) center 0 no-repeat;">
                <a target="_blank" href="javascript:;"></a>
            </li>
            <?php } ?>
        </ul>
    </div>

    <div class="hd">
        <ul></ul>
    </div>
    <!--
    <span class="prev"></span>
    <span class="next"></span>
    -->
</div>

<script type="text/javascript">

    /* 控制左右按钮显示 */
    jQuery(".fullSlide").hover(function () {
        jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
    }, function () {
        jQuery(this).find(".prev,.next").fadeOut()
    });

    /* 调用SuperSlide */
    jQuery(".fullSlide").slide({
        titCell: ".hd ul", mainCell: ".bd ul", effect: "fold", autoPlay: true, autoPage: true, trigger: "click",
        startFun: function (i) {
            var curLi = jQuery(".fullSlide .bd li").eq(i);
            /* 当前大图的li */
            if (!!curLi.attr("_src")) {
                curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
                /* 将_src地址赋予li背景，然后删除_src */
            }
        }
    });
</script>
<!--banner结束-->

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

    <div class="mian_bottom">
        <div class="news-list-top" style="margin-bottom: 8px">
            <span>名优品牌</span>
        </div>
        <div class="case">
            <div class="case_list">
                <div class="picScroll">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pinpai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['kk']->value%2==0){?>mr_0<?php }?>">
                            <div class="case_img">
                                <a href="" title=""><img src="/<?php echo $_smarty_tpl->tpl_vars['vv']->value['img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
"/></a>
                            </div>
                            <div class="case_tt"><a href="" title="/<?php echo $_smarty_tpl->tpl_vars['vv']->value['img_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a></div>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>
                </div>
                <script type="text/javascript">
                    $(".picScroll").slide({
                        mainCell: "ul",
                        effect: "leftMarquee",
                        vis: 5,
                        autoPlay: true,
                        interTime: 50,
                        switchLoad: "_src"
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="pro-nav"><a><img src="<?php echo $_smarty_tpl->tpl_vars['middleInfo']->value[0]['img_url'];?>
" alt="" style="margin-top: 30px" width="1200" height="130"></a></div>

    <div class="pro-btm clearfix">
        <div class="pro-left">
            <div class="clearfix">
                <!-- 联系我们 -->
                <div class="pro-right" style="float: left">
                    <h5 class="pro-right-title">联系我们</h5>
                    <ul>
                        <li class="clearfix" style="background: rgb(227, 226, 226);">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['middleInfo']->value[1]['img_url'];?>
" alt="" style="width: 350px">
                            <div><?php echo $_smarty_tpl->tpl_vars['middleInfo']->value[1]['discript'];?>
</div>
                        </li>
                    </ul>
                </div>
                <!-- 新闻列表 -->
                <div class="news-list" style="float: left; margin-left: 25px">
                    <div class="news-list-top">
                        <a href="#">更多&gt;&gt;</a>
                        <span>新闻动态</span>
                    </div>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 新闻切换 -->
        <div id="demo1" class="slideBox" style="width: 380px; height: 250px; overflow: hidden; float: right">
            <ul class="items">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['indexBanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li class="" style="width: 380px; height: 250px;"><a href="http://www.jsdaima.com/" title="这里是测试标题一"><img
                        src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="pro-list">
        <div class="news-list-top" style="margin-bottom: 8px">
            <span>品牌展播</span>
        </div>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pinpaizb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

    <div class="mian_bottom" style="margin-bottom: 40px">
        <div class="news-list-top" style="margin-bottom: 8px">
            <span>我的合作伙伴</span>
        </div>
        <div><?php echo $_smarty_tpl->tpl_vars['middleInfo']->value[2]['discript'];?>
</div>
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