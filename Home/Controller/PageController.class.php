<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class PageController extends Controller
{

    public function index($catid)
    {
        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid)->select();

        $pageInfo = $this->getInfo($catid);

       // show_bug($pageInfo);

        $this->assign('other', $other);
        $this->assign('pageInfo', $pageInfo[0]);

        $this->display();
    }

    function getInfo($category_id){
        $articles = D('Articles');
        $sql = "SELECT a.* FROM `yw_articles` a 
                LEFT JOIN yw_articles_category b ON a.id=b.category_id  AND b.status=0 
                WHERE ( a.category_id=$category_id AND a.status=0 ) 
                GROUP BY a.id
                ORDER BY a.sort DESC , a.id DESC";
        return $articles->query($sql);
    }

}