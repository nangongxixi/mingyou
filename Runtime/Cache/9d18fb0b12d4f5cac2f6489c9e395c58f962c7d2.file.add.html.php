<?php /* Smarty version Smarty-3.1.6, created on 2017-11-24 10:52:38
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:320325a17862946b9d2-35687314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d18fb0b12d4f5cac2f6489c9e395c58f962c7d2' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\category\\add.html',
      1 => 1511491955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320325a17862946b9d2-35687314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a1786294f83f',
  'variables' => 
  array (
    'categoryinfo' => 0,
    'v' => 0,
    'categoryDetail' => 0,
    'k' => 0,
    'parentDetail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1786294f83f')) {function content_5a1786294f83f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\mingyou\\Firame\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!--图片上传-->
<link rel="stylesheet" href="<?php echo @STATIC_URL;?>
upImage/zyupload/skins/zyupload-1.0.0.min.css " type="text/css">
<script type="text/javascript" src="<?php echo @STATIC_URL;?>
upImage/zyupload/zyupload.basic-1.0.0.min.js"></script>

<div class="col-xs-12">
    <div class="box">
        <div class="box-body">
            <form method="post" enctype="multipart/form-data" id="formData">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th class="detail-title">封面图</th>
                        <td>
                            <span id="imgArr" style="display: none; ">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoryinfo']->value['imgArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <img src="/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" width="118" class="editImg" height="118"
                                     style="display: block; float: left; margin-right: 8px;margin-top: 8px">
                            <?php } ?>
                            </span>
                            <div id="zyupload" class="zyupload"></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">分类名称</th>
                        <td>
                            <div>
                                <input type="hidden" name="id" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_id'];?>
">
                                <input type="text" name="category_name" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_name'];?>
"
                                       errorMsg="分类名称不能为空"
                                       placeholder="请填写分类名称">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">分类父级</th>
                        <td>
                            <div>
                                <select class="form-control" name="category_pid"  errorMsg="分类父级不能为空">
                                    <option value="">—— 请选择 ——</option>
                                   <!-- <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categoryinfo']->value),$_smarty_tpl);?>
-->
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoryinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['parentDetail']->value['category_id']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                        <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">排序</th>
                        <td>
                            <div>
                                <input type="text" name="category_sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['category_sort'];?>
"
                                       placeholder="请填写排序">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">显示</th>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" style="top: -3px" name="isindex" value="<?php echo $_smarty_tpl->tpl_vars['categoryDetail']->value['isindex'];?>
"> 显示导航
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="reset" class="btn bg-orange btn-lg " status="0">重置
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" id="submit" class="btn btn-success btn-lg subform">提交</button>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>


<script>
    $(function () {

        init();//初始化


        //提交表单
        $('#submit').unbind('click').click(function () {

            //检查图片是否保存
            if ($('#preview').find('.file_success:hidden').length != 0) {
                layer.msg('您有图片没保存', {
                    icon: 2,
                    time: 2000
                });
                return false;
            }

            //数据验证
            if (!validata()) {
                return false;
            }

            //判断是否有选择上传文件
            var formData = new FormData($("#formData")[0]);
            formData.append('isindex', $('input[name="isindex"]:checked').length); //是否在导航显示

            $.ajax({
                url: '../category/add',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (returnJSON) {
                    if (returnJSON.status) {
                        layer.msg(returnJSON.msg, {
                            icon: 1,
                            time: 2000
                        }, function () {
                            sessionStorage.clear();
                            localStorage.setItem('address', '../category/showlist');//保存当前地址,避免刷新跳转
                            $('#content').load('../category/showlist');
                        });
                    } else {
                        layer.msg(returnJSON.msg, {
                            icon: 2,
                            time: 2000
                        });
                    }
                }
            });
        });

        // 图片上传—>初始化插件
        $("#zyupload").zyUpload({
            width: "100%",                 // 宽度
            height: "100%",                 // 宽度
            itemWidth: "140px",                 // 文件项的宽度
            itemHeight: "115px",                 // 文件项的高度
            url: "../article/coverImg",   // 上传文件的路径
            fileType: ["jpg", "png", "js", "exe"],// 上传文件的类型
            fileSize: 51200000,                // 上传文件的大小
            multiple: true,                    // 是否可以多个文件上传
            dragDrop: false,                   // 是否可以拖动上传文件
            tailor: false,                   // 是否可以裁剪图片
            del: true,                    // 是否可以删除文件
            finishDel: false,  				  // 是否在上传文件完成后删除预览
            /* 外部获得的回调接口 */
            onSelect: function (selectFiles, allFiles) {    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                console.info("当前选择了以下文件：");
                console.info(selectFiles);
            },
            onDelete: function (file, files) {              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                console.info("当前删除了此文件：");
                console.info(file.name);
            },
            onSuccess: function (file, response) {          // 文件上传成功的回调方法
                console.info("此文件上传成功：");
                console.info(file.name);
                console.info("此文件上传到服务器地址：");
                console.info(response);
                //$("#uploadInf").append("<p>上传成功，文件地址是：" + response + "</p>");
            },
            onFailure: function (file, response) {          // 文件上传失败的回调方法
                console.info("此文件上传失败：");
                console.info(file.name);
            },
            onComplete: function (response) {           	  // 上传完成的回调方法
                console.info("文件上传完成");
                console.info(response);
            }
        });

        //修改图片
        if ($('#imgArr').html().length > 0) {
            $('#preview').prepend($('#imgArr').html());
        }
        $('.editImg').on('click', function () {
            var id = $('input[name="id"]').val();
            layer.open({
                type: 2,
                title: '编辑封面图片',
                shadeClose: true,
                shade: 0.8,
                area: ['500px', '90%'],
                content: '../category/editImg/id/' + id,
                cancel: function () {
                    location.reload();
                }
            });
        });


        //数据验证
        function validata() {
            var formVal = $('form input,select');

            //名称
            if ($(formVal[2]).val() == '') {
                layer.msg($(formVal[2]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                });
                return false;
            }



           // console.log($('input[name="isindex"]:checked').length);
           // return false;
/*
            //分类
            if ($(formVal[3]).val() == '') {
                layer.msg($(formVal[3]).attr("errorMsg"), {
                    icon: 2,
                    time: 2000
                });
                return false;
            }*/
            return true;

        }

        //初始化需要运行的东西
        function init() {
            var inputVal = JSON.parse(sessionStorage.getItem("inputVal"));
            //如果还没保存过输入，就定义一个空对象来保存
            if (inputVal == null) {
                var inputVal = {};
            }

            //回填输入（根据详情回填）
            var isindexVal = parseInt($('input[name="isindex"]').val());
            if(isindexVal==1){
                $('input[name="isindex"]').attr('checked','');
            }

            //回填输入(避免刷新)
            $.each(inputVal, function (index, item) {
                $(document).find('input[name="' + index + '"],textarea[name="' + index + '"]').val(item);
                if(index=='isindex' && item==1){
                    $(document).find('input[name="' + index + '"]').attr('checked','');
                }
            });
            //保存输入
            $('form input,textarea').keyup(function () {
                var name = $(this).attr('name');
                var val = $(this).val();
                inputVal[name] = val;
                sessionStorage.setItem('inputVal', JSON.stringify(inputVal));
            });

            $('form input[name="isindex"]').click(function () {
                var name = $(this).attr('name');
                var val = $('input[name="isindex"]:checked').length
                inputVal[name] = val;
                sessionStorage.setItem('inputVal', JSON.stringify(inputVal));
            });

        }

        //相册图片张数限制
        $(document).on('click','.upload_image',function(){
            if ($('#preview img').length >= 3) {
                $(this).parent().parent().hide();
            }
        });
        if ($('#preview img').length >= 3) {
            $("#rapidAddImg").hide();
        }

    });
</script>
<?php }} ?>