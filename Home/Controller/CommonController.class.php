<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{

    public function head()
    {
        $this->assign('navList', $this->getInfo());
        $this->display();
    }

    public function bottom()
    {
        $this->assign('navList', $this->getInfo());
        $this->display();
    }

    function getInfo(){
        $articles = D('Articles');
        //导航菜单
        $navList = D('articles_category')->where('isindex=1')->order('category_sort desc,category_id desc')->select();

        $link=[
            '/index.php/Home/Page/index/catid/10',//关于工程
            '/index.php/Home/List/index/catid/5',//名优品牌
            '/index.php/Home/List/index/catid/2',//新闻动态
            '/index.php/Home/Page/index/catid/11',//发现品牌
            '/index.php/Home/Query/index/catid/12',//查询中心
            '/index.php/Home/Page/index/catid/13',//关于我们
        ];

        for($i=0; $i<count($navList); $i++){
            $navList[$i]['link']=$link[$i];
        };

        return $navList;
    }

}