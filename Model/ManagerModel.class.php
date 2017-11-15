<?php

namespace Model;

use Think\Model;

class ManagerModel extends Model {
    
    protected $patchValidate = true;
    protected $_validate = array(
        //验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        //验证用户名,require必须填写项目
        array('mg_name', 'require', '* 必须填写帐号'),
        array('mg_real_name', 'require', '* 必须填写真实姓名'),
        array('mg_pwd', 'require', '* 必须填写密码'),
        array('mg_pwd', '/^(?=.{6,16})(?=.*[a-z])(?=.*[0-9])[0-9a-z]*$/', '* 必须6位以上且同时包含字母和数字'),
        array('mg_tel', '/^((0\d{2,3}-\d{7,8})|(1[34578]\d{9}))$/', '* 手机号码格式错误'),
        array('mg_role_id', 'require', '* 必须选择角色'),       
    );

    //制作一个方法对用户名和密码进行校验
    function checkNamePwd($name, $pwd) {
        //1. 根据$name查询是否有此记录
        //select  *  from  sw_manager where mg_name=$name;
        //select()  find()  
        //根据指定字段进行查询getByXXX();  getByMg_name($name);
        //getBymg_pwd();  父类Model利用__call()封装的方法
        //getByXXX()函数返回一维数组信息
        $info = $this->getByMg_name($name);
        //$info =null  说明用户名错误
        //$info = 一维数组  用户名正确
        //$info不为null，就可以继续验证密码
        if ($info != null) {
            //验证密码(查询出来的密码与用户输入的密码进行比较)
            if ($info['mg_pwd'] != md5($pwd)) {
                return false;
            } else {
                return $info;
            }
        } else {
            return false;
        }
    }

}
