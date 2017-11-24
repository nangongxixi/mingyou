<?php

namespace Admin\Controller;

use Component\AdminController;

class ArticleController extends AdminController
{

    //显示列表
    function showlist()
    {
        $infop = D('Articles');
        $_SESSION['sear'] = [
            'title' => [' like \'%', $_GET['title'], '%\''],
            'category_id' => ['= \'', $_GET['category_id'], '\'']
        ];
        foreach ($_SESSION['sear'] as $k => $v) {
            if (!empty($v[1])) {
                $condition .= ' and '.$k . $v[0] . $v[1] . $v[2].' and status=0';
            }
        }
        //重置分页条件
        $conditionSear = ltrim($condition,' and ');
        $total = $infop->where($conditionSear)->count();
        //echo $infop->_sql();
        $per = 14;
        $page = new \Component\Page($total, $per); //autoload        
        $sql = "select * from `yw_articles` where 1=1 and status=0 $condition order by sort desc,id desc " . $page->limit;
        $info = $infop->query($sql);
        $pagelist = $page->fpage();
        $selectList = R('Admin/Category/getInfo');//跨控制器调用方法
        $this->assign('selectList', $selectList);
        $this->assign('info', $info);
        $this->assign('pagelist', $pagelist);
        $this->display();

    }

    //详情
    function detail($id)
    {
        $info = D('Articles')->find($id);
        $imgInfo = D('images')->where(' status=0 and article_id='.$id)->order('sort desc, id desc')->select();
        $imgArr = [];
        foreach ($imgInfo as $k=>$v){
            array_push($imgArr,$v['img_url']);
        }
        $info[imgArr]=$imgArr;
        $this->assign('info', $info);
        $this->display();
    }

    //新增、修改
    function add($id = false)
    {
        $article = D('Articles');
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
                ob_clean();//不加这个，前端收不到json数据
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

        //操作数据库
        if (!empty($_POST)) {

            //show_bug($_POST);

            if (!$article->create()) {
                $this->ajaxReturn(array(
                    'status' => false,
                    'msg' => '操作失败',
                ));
            } else {
                $_POST["createtime"] = date("Y-m-d H:i:s", time());
                //判断是新增还是修改
                if ($_POST['id']) {
                    $inertID = $article->where('id=' . $_POST['id'])->save($_POST);
                } else {
                    $inertID = $article->add($_POST);
                }
                if ($inertID) {
                    //取得新增返回的id，回填到图片表的article_id
                    if ($_POST['id']) {
                        $data['article_id'] = $_POST['id'];//修改过程中添加图片
                    } else {
                        $data['article_id'] = $inertID;//新增过程中添加图片
                    }

                    $imgArr = array_values($_SESSION['imgArr']);

                    if (!empty($imgArr)) {
                        $inertID = $images->where('id in (' . implode(",", $imgArr) . ')')->save($data);
                        unset($_SESSION['imgArr']);//干掉上次添加多图的session
                    }

                    $data = ['status' => true, 'msg' => '操作成功'];
                    ob_clean();//不加这个，前端收不到json数据
                    $this->ajaxReturn($data);

                } else {
                    $data = ['status' => false, 'msg' => '请点“开始上传”'];
                    ob_clean();//不加这个，前端收不到json数据
                    $this->ajaxReturn($data);
                }
            }
        }
        //根据当前id获取详情
        if ($id) {
            //图片列表
            $info = D('Articles')->find($id);
            $imgInfo = D('images')->where('status=0 and type=0 and article_id='.$id)->select();
            $imgArr = [];
            foreach ($imgInfo as $k=>$v){
                array_push($imgArr,$v['img_url']);
            }
            $info[imgArr]=$imgArr;

           // show_bug($info['advantage']);
            $this->assign('info', $info);
        }
        //获得被修改管理员的信息
        $selectList = R('Admin/Category/getInfo');//跨控制器调用方法

       // show_bug($selectList);
        $this->assign('selectList', $selectList);
        $this->display();
    }

    //删除
    function del($id = false)
    {
        $manager = D("Articles");
        $mg_id = $_POST['id'];
        if (!empty($mg_id)) {
            $data["status"] = 1;
            $inertID = $manager->where('id=' . $id)->save($data);
            if ($inertID) {
                $data = ['status' => true, 'msg' => '操作成功'];
                ob_clean();//不加这个，前端收不到json数据
                $this->ajaxReturn($data);
            } else {
                $data = ['status' => false, 'msg' => '操作失败'];
                ob_clean();//不加这个，前端收不到json数据
                $this->ajaxReturn($data);
            }
        }
        $this->display();
    }

    //富文本图片上传
    function ck_upload($ftype = 'image')
    {
        if ($ftype == 'image') {
            $ftype = array('jpg', 'gif', 'png', 'jpeg', 'bmp');
        }
        header("Content-type:text/html");
        import('ORG.Net.UploadFile');
        //图片上传
        if ($_FILES['upload']['size'] != 0) {
            $config = array(
                'rootPath' => './public/',  //根目录
                'savePath' => 'upload/', //保存路径
            );
            //附件被上传到路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            //uploadOne会返回已经上传的附件信息
            $z = $upload->uploadOne($_FILES['upload']);
            if (!$z) {
                echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(1, '/', '上传失败," . $upload->getError() . "！');</script>";
            } else {
                $path = 'http://' . $_SERVER['HTTP_HOST'] . '/public/' . $z['savepath'] . $z['savename'];
                echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(1,'$path','');</script>";
            }
        }
    }

    //封面图上传
    function coverImg()
    {
        $uploaddir = 'public/upload/';
        $name = $_FILES['file']['name'];
        $uploadfile = $uploaddir . $name;
        $type = strtolower(substr(strrchr($name, '.'), 1));
        //获取文件类型
        $typeArr = array("jpg", "png", "gif");
        if (!in_array($type, $typeArr)) {
            echo "请上传jpg,png或gif类型的图片！";
            exit;
        }
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name'])) {
            print_r($_FILES);
            //插入数据库
            $images = D('images');
            $data['img_url'] = $uploaddir . $_FILES['file']['name'];
            $data["createtime"] = date("Y-m-d H:i:s", time());
            $addid = $images->add($data);
            $_SESSION['imgArr'][$addid] = $addid;//将新增返回的id保存到session，以便新增资料的时候回填
        } else {
            print "Possible file upload attack!  Here's some debugging info:\n";
            print_r($_FILES);
        }
    }

    //编辑多图
    function editImg($id)
    {
		$imgMod = D('images');
		//编辑排序
		if($_POST['sort']){			
			$inertID = $imgMod->where('status=0 and type=0 and id='.$_POST['id'])->save($_POST);
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
		//删除
		if($_POST['status']){			
			$inertID = $imgMod->where('status=0 and type=0 and id='.$_POST['id'])->save($_POST);
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
		
		
        $info = $imgMod->where('status=0 and type=0 and article_id='.$id)->order('sort desc,id desc')->select();
        $this->assign('info', $info);
        $this->display();
    }

}
