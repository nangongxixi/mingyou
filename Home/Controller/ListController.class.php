<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class ListController extends Controller
{

    public function index($catid)
    {
        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid)->select();

        $ListInfo = $this->getInfo($catid);

        // show_bug($ListInfo);

        $this->assign('other', $other);
        $this->assign('ListInfo', $ListInfo);
        $this->display();
    }

    public function detail($id)
    {
        $articles = D('Articles');
        $Detail = $articles->find($id);
        $Detail['click'] += 1;
        $articles->save($Detail);
        // show_bug($Detail);
        $this->assign('Detail', $Detail);
        $this->display();
    }

    function getInfo($category_id)
    {
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