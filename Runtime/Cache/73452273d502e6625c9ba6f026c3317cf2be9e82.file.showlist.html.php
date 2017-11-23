<?php /* Smarty version Smarty-3.1.6, created on 2017-11-23 15:39:50
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\UserInfo\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:117335a167b46a09522-35023033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73452273d502e6625c9ba6f026c3317cf2be9e82' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\UserInfo\\showlist.html',
      1 => 1511399452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117335a167b46a09522-35023033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kk' => 0,
    'vv' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a167b46a713b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a167b46a713b')) {function content_5a167b46a713b($_smarty_tpl) {?><div class="col-xs-12">
    <div class="box">

        <div class="box-header" style="/*padding: 27px !important;*/">
            <button type="button" class="btn btn-success addItem"><i class="fa fa-plus"></i> 新增</button>
            <div class="box-tools">
                <div class="col-xs-3 input-group-sm" style="width: 200px;padding-right: 0 !important; margin-right: 15px">
                    <select class="form-control" name="type">
                        <option value="">-- 请选择类型 --</option>
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = C('QUERY_TYPE'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="name" class="form-control pull-right"
                           placeholder="请输入名称" style="font-size: 14px;width: 200px">
                    <div class="input-group-btn" id="search" href="<?php echo @__MODULE__;?>
/UserInfo/showlist">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="input-group-btn" id="reset" href="<?php echo @__MODULE__;?>
/UserInfo/showlist" style="padding-left: 15px">
                        <button type="submit" class="btn btn-default">重置</button>
                    </div>

                </div>
            </div>

        </div>


        <div class="box-body table-responsive no-padding" id="contentinfo">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>所属类别</th>
                    <th>内容描述</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                    <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php if ((mb_strlen($_smarty_tpl->tpl_vars['v']->value['name'],'utf-8'))>20){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,20,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php }?></td>
                    <td>
                        <span class="badge bg-green" style="font-size: 14px">
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = C('QUERY_TYPE'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['kk']->value==$_smarty_tpl->tpl_vars['v']->value['type']){?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
<?php }?>

                            <?php } ?>
                        </span>
                    </td>
                    <td title="<?php echo mb_substr(strip_tags($_smarty_tpl->tpl_vars['v']->value['discript'],'<p>'),0,200,'utf-8');?>
">
                        <?php echo mb_substr(strip_tags($_smarty_tpl->tpl_vars['v']->value['discript'],'<p>'),0,30,'utf-8');?>


                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['createtime'];?>
</td>
                    <td class="manager">
                       <!-- <button class="btn btn-success btn-flat btn-sm detail" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">详情
                        </button>-->
                        <button class="btn bg-maroon btn-flat btn-sm addItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑
                        </button>
                        <button class="btn btn-danger btn-flat btn-sm deleteItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除
                        </button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="admin-table-page">
                <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

            </div>
        </div>
    </div>
</div>

<script>
    $(function () {

        //保持搜索条件
        var searArr = JSON.parse(localStorage.getItem('searArr'));
        $.each(searArr, function (index, item) {
            $("input[name='" + index + "'],select[name='" + index + "']").val(item);
        });

        //点击新增、编辑
        $('.addItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                localStorage.setItem('address', '../UserInfo/add/id/' + itemID);//子页面地址
                $('#content').load("../UserInfo/add/id/" + itemID);
                return false;
            }
            localStorage.setItem('address', '../UserInfo/add');//子页面地址
            $('#content').load("../UserInfo/add");
        })

        //点击删除
        $('.deleteItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                var url = '../UserInfo/del';
                var dataArr = {
                    "id": itemID,
                }
                layer.confirm('您确定要删除id为' + itemID + '的数据？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    $.ajax({
                        url: url,
                        type: "post",
                        dataType: "json",
                        data: dataArr,
                        success: function (returnJSON) {
                            //console.log(returnJSON);
                            if (returnJSON.status == true) {
                                layer.msg(returnJSON.msg, {
                                    icon: 1,
                                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                                }, function () {
                                    localStorage.setItem('address', '../UserInfo/showlist');//保存当前地址,避免刷新跳转
                                    $('#content').load('../UserInfo/showlist');
                                });
                            } else {
                                layer.msg(returnJSON.msg);
                            }
                        }
                    });
                });
                return false;
            }
        })

    });
</script><?php }} ?>