<?php

namespace Admin\Controller;

use Component\AdminController;

class CommonController extends AdminController {

    //左边页面
    function left() {
        //根据session用户id信息查询角色id信息
        $sql = "select * from yw_manager where mg_id=" . $_SESSION['mg_id'] . " and mg_deleted=0";
        $minfo = D()->query($sql);
        $role_id = $minfo[0]['mg_role_id'];
        //根据角色信息获得权限ids的信息
        $sql = "select * from yw_role where role_id=" . $role_id . " and role_deleted=0";
        $rinfo = D()->query($sql);
        $auth_ids = $rinfo[0]['role_auth_ids'];
        //根据$auth_ids查询全部拥有的权限信息
        //① 获得顶级权限
        $sql = "select * from yw_auth where auth_level=0 and deleted=0";
        //如果是admin管理员要现实全部权限
        if ($_SESSION['mg_id'] != 1) {
            $sql .= " and auth_id in ($auth_ids)";
        }
        $p_info = D()->query($sql);
        //② 获得次顶级权限
        $sql = "select * from yw_auth where auth_level=1 and auth_id<>10 and deleted=0";
        //如果是admin管理员要现实全部权限
        if ($_SESSION['mg_id'] != 1) {
            $sql .= " and auth_id in ($auth_ids)";
        }
        $s_info = D()->query($sql);


        //配置小图标
        $icon = [
           "fa fa-cab","fa fa-user","fa fa-users","fa fa-users","fa fa-users","fa fa-users"
        ];

        $this->assign('pauth_info', $p_info);
        $this->assign('sauth_info', $s_info);
        $this->assign('icon', $icon);
        $this->display();
    }

}
