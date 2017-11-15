<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $articles = D('Articles');
        //底部信息
        $footInfo = $articles->where('category_id=16')->select();

        //底部菜单
        $cart = D('articles_category')->where('category_pid=3')->select();//车贷
        $house = D('articles_category')->where('category_pid=4')->select();//房贷
        $car = D('articles_category')->where('category_pid=5')->select();//信用贷
        $baod = D('articles_category')->where('category_pid=6')->select();//保单贷
        $footNav = [
            '车贷' => $cart,
            '房贷' => $house,
            '信用贷' => $car,
            '保单贷' => $baod,
        ];
        $this->assign('footInfo', $footInfo);
        $this->assign('footNav', $footNav);
        $this->display();
    }


    public function main()
    {
        $articles = D('Articles');
        //贷款项目

        $sql="select a.* from yw_articles as a
                WHERE a.category_id IN (3,4,5,6) 
                or a.category_id 
                IN(SELECT category_id from yw_articles_category
                 WHERE status=0 and category_pid=3 or category_pid=4 or category_pid=5 or category_pid=6)
                ORDER BY a.sort desc,a.id desc LIMIT 7";
        $articleList = $articles->query($sql);

       // $articleList = $articles->where('category_id in (3,4,5,6) and status=0')->order('sort desc')->limit(7)->select();
        //客服列表
        $customer = $articles->table("yw_articles as a")->join("yw_images as b")->where("a.id=b.article_id and a.category_id=12 and b.type=0 and b.status=0")->select();
        //成功案例
        $sql = "SELECT a.*,b.img_url FROM yw_articles as a 
                LEFT JOIN yw_images as b ON ( a.id=b.article_id )
                LEFT JOIN yw_articles_category as c ON ( a.category_id=c.category_id )
                WHERE c.category_pid=9
                ORDER BY a.sort desc,a.id desc LIMIT 3";
        $caseList = $articles->query($sql);
        //资金支持
        $amount =  $articles->where('category_id=15')->select();
        //贷款攻略
        $sql = "SELECT a .*,b . img_url FROM yw_articles as a LEFT JOIN yw_images as b ON(a . id = b . article_id) WHERE(a . category_id = 7) ORDER BY a . sort desc,a . id desc LIMIT 7";
        $dkglList = $articles->query($sql);
        //资讯中心
        $sql = "SELECT a .*,b . img_url FROM yw_articles as a LEFT JOIN yw_images as b ON(a . id = b . article_id) WHERE(a . category_id = 8) ORDER BY a . sort desc,a . id desc LIMIT 7";
        $zxzxList = $articles->query($sql);

        //echo $articles->_sql();

        //常见问答
        $askList =  $articles->where('category_id=10')->select();
        //友情连接
        $links =  $articles->where('category_id=14')->select();

        //show_bug($zxzxList);

        //echo $articles->_sql();
        //show_bug($footNav);
        $this->assign('articleList', $articleList);
        $this->assign('customer', $customer);
        $this->assign('caseList', $caseList );
        $this->assign('amount', $amount);
        $this->assign('dkglList', $dkglList);
        $this->assign('zxzxList', $zxzxList);
        $this->assign('askList', $askList);
        $this->assign('links', $links);


        $this->display();
    }

}