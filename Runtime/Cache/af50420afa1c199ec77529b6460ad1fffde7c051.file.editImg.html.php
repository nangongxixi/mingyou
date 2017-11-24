<?php /* Smarty version Smarty-3.1.6, created on 2017-11-24 10:51:13
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\article\editImg.html" */ ?>
<?php /*%%SmartyHeaderCode:203495a137d75d45ce9-58422170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af50420afa1c199ec77529b6460ad1fffde7c051' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\article\\editImg.html',
      1 => 1511355261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203495a137d75d45ce9-58422170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a137d75dce88',
  'variables' => 
  array (
    'info' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a137d75dce88')) {function content_5a137d75dce88($_smarty_tpl) {?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>页面详情</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo @STATIC_URL;?>
dist/css/skins/skin-blue.min.css">

    <!-- ./wrapper -->
    <script src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
    <!-- layer -->
    <script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>
    <!-- 日期插件 -->
    <script src="<?php echo @STATIC_URL;?>
laydate/laydate.js"></script>

    <!--富文本编辑器-->
    <script src="<?php echo @STATIC_URL;?>
ckeditor/ckeditor.js"></script>
    <script src="<?php echo @STATIC_URL;?>
ckeditor/samples/js/sample.js"></script>

</head>

<body class="skin-blue sidebar-mini">


<div class="box-body">


        <div class="box-body table-responsive no-padding" id="contentinfo">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>缩略图</th>
                    <th>排序号</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                    <td>
                        <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" width="60"  height="60" style="display: block; float: left; margin-right: 8px">
                    </td>
                    <td class="sort"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</td>
                    <td class="sortInput" style="display: none">
                        <input type="text" name="sort" class="form-control" style="width:80px" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" placeholder="请填写标题">
                    </td>
                    <td class="manager">
                        <button class="btn bg-maroon btn-flat btn-sm editItem" itemID="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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

        </div>
</div>

</body></html>

<script>
    $(function () {
        //点击编辑（显示input）
        $('.editItem').unbind('click').on('click',function(){
            var itemID = $(this).attr('itemID');
            $(this).parent().siblings('.sort').hide();
            $(this).parent().siblings('.sortInput').show();
            $(this).html('保存');
            $(this).removeClass("bg-maroon").removeClass("editItem").addClass('btn-success');			
        });
		
		//保存
		$(document).on('click','.btn-success',function(){		
			var itemID = $(this).attr('itemid');
			var sort = $(this).parent().siblings().find('input').val();			
			var url = '../article/editImg';
			var dataArr = {
				"id": itemID,
				"sort":sort
			}
			$.ajax({
				url: url,
				type: "post",
				dataType: "json",
				data: dataArr,
				success: function (returnJSON) {
					//console.log(returnJSON);
					//return false;
					if (returnJSON.status == true) {
						layer.msg(returnJSON.msg, {
							icon: 1,
							time: 2000 //2秒关闭（如果不配置，默认是3秒）
						}, function () {
							location.reload();
						});
					} else {
						layer.msg(returnJSON.msg);
					}
				}
			});							
		});
		
		//删除
		$('.deleteItem').on('click',function(){
			var itemID = $(this).attr('itemid');						
			var url = '../article/editImg';
			var dataArr = {
				"id": itemID,
				"status":1
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
							//return false;
							if (returnJSON.status == true) {
								layer.msg(returnJSON.msg, {
									icon: 1,
									time: 2000 //2秒关闭（如果不配置，默认是3秒）
								}, function () {
									location.reload();
								});
							} else {
								layer.msg(returnJSON.msg);
							}
						}
					});
                });
                return false;
		});
		
		
    });
</script><?php }} ?>