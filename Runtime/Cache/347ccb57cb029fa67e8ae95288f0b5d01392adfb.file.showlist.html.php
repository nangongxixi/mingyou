<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 20:31:48
         compiled from "D:/phpStudy/PHPTutorial/WWW/mingyou/Admin/View\Apply\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:50365a0c33b495e720-21753078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '347ccb57cb029fa67e8ae95288f0b5d01392adfb' => 
    array (
      0 => 'D:/phpStudy/PHPTutorial/WWW/mingyou/Admin/View\\Apply\\showlist.html',
      1 => 1510644628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50365a0c33b495e720-21753078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0c33b4a026e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c33b4a026e')) {function content_5a0c33b4a026e($_smarty_tpl) {?><div class="col-xs-12">
    <div class="box">
        <div class="box-header" style="/*padding: 27px !important;*/">
            <button type="button" class="btn btn-success addItem" style="display: none"><i class="fa fa-plus"></i> 新增
            </button>
            <div style="height: 32px"></div>
            <div class="box-tools">
                <div class="col-xs-3 input-group-sm" style="width: 200px;padding-right: 0 !important; margin-right: 15px">
                    <select class="form-control" name="source">
                        <option value="">-- 请选择来源 --</option>
                        <option value="1">PC</option>
                        <option value="2">WAP</option>
                    </select>
                </div>
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="website" class="form-control pull-right"
                           placeholder="请输入站点名称" style="font-size: 14px; width:200px">
                    <div class="input-group-btn" id="search" href="<?php echo @__MODULE__;?>
/apply/showlist">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="input-group-btn" id="reset" href="<?php echo @__MODULE__;?>
/apply/showlist" style="padding-left: 15px">
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
                    <th>姓名</th>
                    <th>金额</th>
                    <th>电话</th>
                    <th>来源</th>
                    <th>来源网站</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['apply_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                    <td><span class="badge bg-green" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['v']->value['amount'];?>
</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                    <td>
                        <?php if (($_smarty_tpl->tpl_vars['v']->value['source']==1)){?>PC<?php }else{ ?>WAP<?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['website'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['createtime'];?>
</td>
                    <td class="manager">
                        <!--
                        <button class="btn btn-success btn-flat btn-sm detail" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">详情
                        </button>
                        <button class="btn bg-maroon btn-flat btn-sm addItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑
                        </button>
                        -->
                        <button class="btn btn-danger btn-flat btn-sm deleteItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['apply_id'];?>
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





        //详情
        $('.detail').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            layer.open({
                type: 2,
                title: '页面详情',
                shadeClose: true,
                shade: 0.8,
                area: ['64%', '90%'],
                content: "../apply/detail/id/" + itemID
            });
        });

        //点击新增、编辑
        $('.addItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                localStorage.setItem('address', '../apply/add/id/' + itemID);//子页面地址
                $('#content').load("../apply/add/id/" + itemID);
                return false;
            }
            localStorage.setItem('address', '../apply/add');//子页面地址
            $('#content').load("../apply/add");
        })

        //点击删除
        $('.deleteItem').unbind('click').click(function () {
            var itemID = $(this).attr('itemID');
            if (itemID) {
                var url = '../apply/del';
                var dataArr = {
                    "id": itemID,
                }
                layer.confirm('您确定要删除id为' + itemID + '的订单？', {
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
                                    localStorage.setItem('address', '../apply/showlist');//保存当前地址,避免刷新跳转
                                    $('#content').load('../apply/showlist');
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

        //搜索
        $('#search').unbind('click').click(function () {

            var obj = $('.box-tools input,select');

            var url = '';
            for (var i = 0; i < obj.length; i++) {
                url+=obj.eq(i).attr('name') + '/' + obj.eq(i).val()+ '/'
            }

            //todo 删除最后一个符号
            url.substring(0,url.length-1);


            console.log(url);

            localStorage.setItem('address', '../apply/showlist/id/' + itemID);//子页面地址
            $('#content').load("../apply/add/id/" + itemID);


        });

    });
</script><?php }} ?>