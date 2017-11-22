<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class QueryController extends Controller
{

    public function index($catid)
    {
        //banner图
        $other['bannerImg'] = D('images')->field('img_url')->where('type=1 and status=0 and article_id=' . $catid)->select();

        $content = $this->getInfo($catid);

        $this->assign('other', $other);
        $this->assign('content', $content);
        $this->display();
    }

    public function QueryCenter()
    {
        $type = $_POST['type']; //type 0工作人员，1参录企业
        $keyword = $_POST['keyword'];
        $queryResult = $this->getQueryResult($type, $keyword);
        if ($queryResult) {
            ob_clean();//不加这个，前端收不到json数据
            $this->ajaxReturn(['status' => true, 'type' => $type, 'msg' => '查询成功', 'queryResult' => $queryResult[0]]);
        } else {
            ob_clean();//不加这个，前端收不到json数据
            $this->ajaxReturn(['status' => false, 'msg' => '暂无信息']);
        }
    }

    //查询中心的查询结果
    function getQueryResult($type, $keyword)
    {
        $userInfo = D('userinfo');
        $sql = "SELECT a.*,b.img_url FROM `yw_userinfo` a
                LEFT JOIN yw_images b
                ON a.id=b.article_id AND b.type=2 AND b.status=0
                WHERE ( a.type=$type AND a.status=0  AND name LIKE '%$keyword%')
                GROUP BY a.id";
        return $userInfo->query($sql);
    }

    function getInfo($category_id)
    {
        $articles = D('Articles');
        $sql = "SELECT a.* FROM `yw_articles` a 
                LEFT JOIN yw_articles_category b ON a.id=b.category_id  AND b.status=0 
                WHERE ( a.category_id=$category_id AND a.status=0 ) 
                GROUP BY a.id
                ORDER BY a.sort DESC , a.id DESC";
        return $articles->query($sql);
    }

}