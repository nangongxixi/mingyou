<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $articles = D('Articles');

        //导航菜单
        $navList = D('articles_category')->where('isindex=1')->order('category_sort desc,category_id desc')->select();

        $link=[
            'index.php/Home/index',
            'index.php/Home/index1',
            'index.php/Home/index2',
            'index.php/Home/index3',
            'index.php/Home/index4',
            'index.php/Home/index5',
        ];

        for($i=0; $i<count($navList); $i++){
            $navList[$i]['link']=$link[$i];
        };

       // show_bug($navList);

        $this->assign('navList', $navList);

        $this->display();
    }


    public function main()
    {
        $articles = D('Articles');

        //banner
        $banner = $articles->join('left join yw_images on yw_articles.id=yw_images.article_id')
            ->where('yw_articles.category_id=15 and yw_articles.status=0')
            ->order('yw_articles.sort desc, yw_articles.id desc')
            ->select();

        //名优品牌
        $pinpai = $articles->join('left join yw_images on yw_articles.id=yw_images.article_id')
            ->where('yw_articles.category_id=5 and yw_articles.status=0')
            ->order('yw_articles.sort desc, yw_articles.id desc')
            ->select();
        $count = count($pinpai);
        $newArr = [];
        for($y = 0; $y < $count/4; $y++){
            for($x = 0; $x < 4; $x++){
                $newArr[$y][$x] = $pinpai[$y*4+$x];
            }
        }

        //show_bug($newArr);

        //工程简介
        $aboutInfo = $articles->where('category_id=7')->select();
        //首页中图8，首页联系我们9, 我的合作伙伴1
        $middleInfo = $articles->join('left join yw_images on yw_articles.id=yw_images.article_id')
                               ->where('category_id in (8,9,1)')->select();

        //echo $articles->_sql();
        //show_bug($middleInfo);


        //新闻列表
        $news = $articles->join('left join yw_images on yw_articles.id=yw_images.article_id')
            ->where('category_id=2')->select();

        $this->assign('banner', $banner);
        $this->assign('pinpai', $newArr);
        $this->assign('aboutInfo', $aboutInfo);
        $this->assign('middleInfo', $middleInfo);
        $this->assign('news', $news);

        $this->display();
    }

}