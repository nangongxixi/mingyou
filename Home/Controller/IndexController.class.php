<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $articles = D('Articles');

        //品牌展播
        $pinpaizb= $this->getInfo(4);

        //banner
        $banner = $this->getInfo(15);

        //工程简介
        $aboutInfo = $articles->where('category_id=7')->select();

        //名优品牌
        $pinpai = $this->getInfo(5);
        $count = count($pinpai);
        $newArr = [];
        for($y = 0; $y < $count/4; $y++){
            for($x = 0; $x < 4; $x++){
                $newArr[$y][$x] = $pinpai[$y*4+$x];
            }
        }

        //首页中图8，首页联系我们9, 我的合作伙伴1
        $sql="
            SELECT * FROM `yw_articles` a
            LEFT JOIN yw_images b ON a.id=b.article_id AND b.status=0 
            WHERE ( a.category_id in (8,9,1) AND a.status=0 )
            GROUP BY a.id
        ";
        $middleInfo = $articles->query($sql);

       // echo $articles->_sql();
      // show_bug($newArr);

        //新闻列表
        $news = $this->getInfo(2);

        //首页切换
        $indexBanner = $this->getInfo(3);

        $this->assign('banner', $banner);
        $this->assign('indexBanner', $indexBanner);
        $this->assign('pinpai', $pinpai);
        $this->assign('aboutInfo', $aboutInfo);
        $this->assign('middleInfo', $middleInfo);
        $this->assign('news', $news);
        $this->assign('pinpaizb', $pinpaizb);
        $this->display();
    }

    function getInfo($category_id){
        $articles = D('Articles');
        $sql = "SELECT a.*,b.img_url FROM `yw_articles` a 
                LEFT JOIN yw_images b 
                ON a.id=b.article_id AND b.type=0 AND b.status=0
                WHERE ( a.category_id=$category_id AND a.status=0 ) 
                GROUP BY a.id
                ORDER BY a.sort DESC, a.id DESC";
        return $articles->query($sql);
    }

}