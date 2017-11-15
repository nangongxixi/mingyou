<?php

namespace Admin\Controller;

use Component\AdminController;

class CategoryController extends AdminController
{

    function showlist()
    {
        $info = $this->getInfo();
        $this->assign('info', $info);
        $this->display();
    }

    function add()
    {
        $images = D('images');
        //图片上传
        if ($_FILES['mg_img']['size'] != 0) {
            $config = array(
                'rootPath' => './public/',  //根目录
                'savePath' => 'upload/', //保存路径
            );
            //附件被上传到路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            //uploadOne会返回已经上传的附件信息
            $z = $upload->uploadOne($_FILES['mg_img']);
            if (!$z) {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => $upload->getError(),
                ));
            } else {
                //拼装图片的路径名
                $bigimg = $z['savepath'] . $z['savename'];
                $_POST['mg_big_img'] = $bigimg;
                //把已经上传好的图片制作缩略图Image.class.php
                $image = new \Think\Image();
                //open();打开图像资源，通过路径名找到图像
                $srcimg = $upload->rootPath . $bigimg;
                $image->open($srcimg);
                $image->thumb(150, 150);  //按照比例缩小
                $smallimg = $z['savepath'] . "small_" . $z['savename'];
                $image->save($upload->rootPath . $smallimg);
                $_POST['mg_small_img'] = $smallimg;
            }
        }

        if (!empty($_POST)) {
            //在AuthModel里边通过一个指定方法实现权限添加
            $auth = new \Model\CategoryModel();
            $z = $auth->addCagegory($_POST);
            if ($z) {
                $this->ajaxReturn(array(
                    'status' => true,
                    'msg' => '操作成功',
                ));
            } else {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            }
        } else {
            //获得父级权限信息
            $info = $this->getInfo(true);
            //show_bug($info);
            //从$info里边获得信息。例如：array(1=>'商品管理',2=>'添加商品',3=>'订单打印')
            //以便在smarty模板中使用{html_options}
            $categoryinfo = array();
            foreach ($info as $v) {
                $categoryinfo[$v['category_id']] = $v['category_name'];
            }
            if ($_GET['id']) {
                //图片列表
                $imgInfo = D('images')->where('status=0 and article_id='.$_GET['id'])->select();
                $imgArr = [];
                foreach ($imgInfo as $k=>$v){
                    array_push($imgArr,$v['img_url']);
                }
               // show_bug($imgArr);
                $categoryinfo[imgArr]=$imgArr;
            }
           // show_bug($categoryinfo);
            $this->assign('categoryinfo', $categoryinfo);
            $this->display();
        }
    }

    //删除
    function del($id = false)
    {
        $category = D("articles_category");
        $mg_id = $_POST['id'];
        if (!empty($mg_id)) {
            //判断下面是否有子类（有子类就不能删除）
            // select count(*) from yw_articles_category where category_path like "1-5-%"
            $sql = "select count(*)  from yw_articles_category where category_pid=$mg_id";
            $categoryInfo = $category->query($sql);
            if ($categoryInfo[0]['count(*)'] > 0) {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '该类下有子类，不能删除',
                ));
                return;
            }

            $data["status"] = 1;
            $inertID = $category->where('category_id=' . $id)->save($data);
            if ($inertID) {
                $this->ajaxReturn(array(
                    'status' => true,
                    'msg' => '操作成功',
                ));
            } else {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            }
        }
        $this->display();
    }

    function getInfo($flag = false)
    {
        //如果$flag标志为false，查询全部的权限信息
        //如果$flag标志为true,只查询level=0/1的权限信息
        $category = D('articles_category');

        //根据当前id获取详情
        $id = $_GET['id'];
        if ($id) {
            //当前id的详情
            $categoryDetail =  $category->find($id);
            //父级的详情
            $sql = "SELECT * FROM `yw_articles_category` WHERE `category_id` in (SELECT category_pid FROM `yw_articles_category` WHERE `category_id` = $id)";
            $parentDetail = $category->query($sql);
            $this->assign('categoryDetail', $categoryDetail);
            $this->assign('parentDetail', $parentDetail[0]);
        }

        //todo 自定义排序
        if ($flag == true) {
            $info =  $category->where('category_level<2 and status=0')->order('category_path asc,category_sort asc')->select();
        } else {
            $info =  $category->where('status=0')->order('category_path asc,category_sort asc')->select();
        }
        //echo D('articles_category')->_sql();

        foreach ($info as $k => $v) {
            if ($v['category_level'] > 1) {
                $info[$k]['category_name'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $v['category_level']) . '├&nbsp;' . $info[$k]['category_name'];
            } else {
                $info[$k]['category_name'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;', $v['category_level']) . $info[$k]['category_name'];
            }
        }

        return $info;
    }

}
