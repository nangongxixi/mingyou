<?php

namespace Model;
use Think\Model;

//权限模型
class CategoryModel extends Model{

    protected $tableName = 'articles_category';

    //添加分类方法
    function addCagegory($auth){
        //$auth里边存在4个信息，还缺少两个关键信息：auth_path和auth_level
        //① insert生成一个新记录
        //② update把path和leve更新进去

      // show_bug($auth);
       //exit();

        if($auth['id']){
            $category_id = $auth['id'];
            $data['article_id'] = $auth['id'];
            $data['type'] = 1;
        }else{
            $category_id = $this -> add($auth);  //返回新记录的主键id值
            $data['article_id'] = $category_id;//新增过程中添加图片
            $data['type'] = 1;
        }

       // echo $category_id;

        //获取新增的id回填到图片数据表
        $imgArr = array_values($_SESSION['imgArr']);
        if (!empty($imgArr)) {
            $inertID = D('Admin/images')->where('id in (' . implode(",", $imgArr) . ')')->save($data);
           // echo D('Admin/images')->_sql();
            unset($_SESSION['imgArr']);//干掉上次添加多图的session
        }

        //path的值分为两种情况
        //全路径：父级全路径与本身id的连接信息
        //① 当前权限是顶级权限，path=$new_id
        //② 当前权限是非顶级权限，path=父级全路径+$new_id
        if($auth['category_pid'] == 0){
            $category_path = $category_id;
        } else {
            //查询指定父级的全路径,条件：$auth['auth_pid']
            $pinfo = $this -> find($auth['category_pid']); //查询出父级的记录信息
            $p_path = $pinfo['category_path']; //父级全路径
            $category_path = $p_path."-".$category_id;
        }
        
        //auth_level数目：全路径里边中恒线的个数
        //      把全路径变为数组，计算数组的个数和减去-1，就是level的信息
        $category_level = count(explode('-',$category_path))-1;
        
        $dt = array(
            'category_id' => $category_id,
            'category_path'=>$category_path,
            'category_level'=>$category_level,
            'isindex'=>$auth['isindex'],
            'createtime'=>date("Y-m-d H:i:s", time())
        );

        //修改
        $dtEdit = array(
            'category_id' => $category_id,
            'category_name'=>$auth['category_name'],
            'category_sort'=>$auth['category_sort'],
            'category_pid'=>$auth['category_pid'],
            'isindex'=>$auth['isindex'],
            'category_path'=>$category_path,
            'category_level'=>$category_level,
            'createtime'=>date("Y-m-d H:i:s", time())
        );

        if($auth['id']){
            return $this -> save($dtEdit);
        }else{
            return $this -> save($dt);
        }

    }
}

