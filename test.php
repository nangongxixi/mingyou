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
        //type 0工作人员，1参录企业
        $type = $_POST['type'];
        $keyword = $_POST['keyword'];
        $queryResult = $this->getInfo($type,$keyword);




        if ($queryResult) {
            ob_clean();//不加这个，前端收不到json数据
            $this->ajaxReturn(['status' => true, 'msg' => '查询成功', 'queryResult' => $queryResult]);
        } else {
            ob_clean();//不加这个，前端收不到json数据
            $this->ajaxReturn(['status' => false, 'msg' => '暂无信息']);
        }
    }

    function getInfo($type, $keyword)
    {
        $userInfo = D('userinfo');
        $sql = "SELECT a.*,b.img_url FROM `yw_userinfo` a
                LEFT JOIN yw_images b
                ON a.id=b.article_id AND b.type=2 AND b.status=0
                WHERE ( a.type=$type AND a.status=0  AND name LIKE '%$keyword%');
                GROUP BY a.id";
        $dd = $userInfo->query($sql);

        echo $userInfo->_sql();

        show_bug($dd);

        exit;

        // return $sql;
        // show_bug($userInfo->query($sql));
        // exit;
        return $userInfo->query($sql);
    }

}