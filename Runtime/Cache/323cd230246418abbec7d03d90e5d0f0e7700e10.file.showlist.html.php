<?php /* Smarty version Smarty-3.1.6, created on 2017-11-24 10:49:08
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:321305a0bd54f9ed866-54439367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323cd230246418abbec7d03d90e5d0f0e7700e10' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\Manager\\showlist.html',
      1 => 1511355261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321305a0bd54f9ed866-54439367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0bd54fa6f36',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'rinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0bd54fa6f36')) {function content_5a0bd54fa6f36($_smarty_tpl) {?><div class="col-xs-12">
    <div class="box">

        <div class="box-header" style="/*padding: 27px !important;*/">
            <button type="button" class="btn btn-success addItem"><i class="fa fa-plus"></i> 新增</button>
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="mg_real_name" class="form-control pull-right"
                           placeholder="请输入管理员名称" style="font-size: 14px">
                    <div class="input-group-btn" id="search" href="<?php echo @__MODULE__;?>
/Manager/showlist">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="box-body table-responsive no-padding" id="contentinfo">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>管理员帐号</th>
                    <th>管理员名称</th>
                    <th>角色</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_real_name'];?>
</td>
                    <td><span class="badge bg-green"><?php echo $_smarty_tpl->tpl_vars['rinfo']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</span></td>
                    <td class="manager">
                        <button class="btn btn-success btn-flat btn-sm detail" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">详情
                        </button>
                        <button class="btn bg-maroon btn-flat btn-sm addItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">编辑
                        </button>
                        <button class="btn btn-danger btn-flat btn-sm deleteItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
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
            $("input[name='" + index + "']").val(item);
        });

        //详情
        $('.detail').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            layer.open({
                type: 2,
                title: '页面详情',
                shadeClose: true,
                shade: 0.8,
                area: ['64%', '90%'],
                content: "../manager/detail/mg_id/" + itemID
            });
        });

        //点击新增、编辑
        $('.addItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                localStorage.setItem('address', '../manager/add/mg_id/' + itemID);//子页面地址
                $('#content').load("../manager/add/mg_id/" + itemID);
                return false;
            }
            localStorage.setItem('address', '../manager/add');//子页面地址
            $('#content').load("../manager/add");
        })

        //点击删除
        $('.deleteItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                var url = '../Manager/del';
                var dataArr = {
                    "mg_id": itemID,
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
                                    localStorage.setItem('address', '../Manager/showlist');//保存当前地址,避免刷新跳转
                                    $('#content').load('../Manager/showlist');
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