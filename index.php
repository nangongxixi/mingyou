<?php

header("content-type:text/html;charset=utf-8");

//制作一个输出调试函数
function show_bug($msg) {
    echo "<pre style='color:red'>";
    print_r($msg);
    echo "</pre>";
}

//定义css、img、js常量
define("SITE_URL", "/");
define("SITE_NAME", "名优企业");
define("SITE_KEYWORDS", "名优企业");
define("SITE_DESCRIPTION", "名优企业");

define("CSS_URL", SITE_URL . "public/Home/css/"); //css
define("IMG_URL", SITE_URL . "../../public/Home/img/"); //img
define("JS_URL", SITE_URL . "public/Home/js/"); //js

define("ADMIN_CSS_URL", SITE_URL . "public/Admin/css/"); //css
define("ADMIN_IMG_URL", SITE_URL . "public/Admin/img/"); //css
define("ADMIN_JS_URL", SITE_URL . "public/Admin/js/"); //css

define("STATIC_URL", SITE_URL . "public/static/"); //css

//为上传图片设置路径
define("IMG_UPLOAD", SITE_URL . "/");

//把目前tp模式由生产模式变为开发调试模式
define("APP_DEBUG", true);

//引入框架的核心程序
include "Firame/firame.php";
