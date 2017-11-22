<?php /* Smarty version Smarty-3.1.6, created on 2017-11-22 16:43:26
         compiled from "D:/phpStudy/WWW/mingyou/Admin/View\UserInfo\add.html" */ ?>
<?php /*%%SmartyHeaderCode:295335a152e329e4f78-11537521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d5b5598f248b46d94ec2a8183d30e3974396482' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Admin/View\\UserInfo\\add.html',
      1 => 1511340203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295335a152e329e4f78-11537521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a152e32a7198',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'kk' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a152e32a7198')) {function content_5a152e32a7198($_smarty_tpl) {?><!--图片上传-->
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
 $_from = $_smarty_tpl->tpl_vars['info']->value['imgArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <th class="detail-title">名称</th>
                        <td>
                            <div>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
                                <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"
                                       errorMsg="名称不能为空"
                                       placeholder="请填写名称">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="detail-title">所属分类</th>
                        <td>
                            <div>
                                <select class="form-control" name="type">
                                    <option value="">—— 请选择 ——</option>
                                    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = C('QUERY_TYPE'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['info']->value['type'])&&$_smarty_tpl->tpl_vars['kk']->value==$_smarty_tpl->tpl_vars['info']->value['type']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th class="detail-title">公司信息</th>
                        <td>
                           <!-- <textarea class="form-control" name="discript" rows="3"
                                      placeholder="请填写描述" errorMsg="描述不能为空"><?php echo $_smarty_tpl->tpl_vars['info']->value['discript'];?>
</textarea>-->
                            <div>
                                <textarea id="TextArea2" name="discript" cols="20" rows="2" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['info']->value['discript'];?>
</textarea>
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

        var discript = $.parseHTML(sessionStorage.getItem('editorcontent2'));//把html转换成实体

       // editor3.setData(advantage);//给富文本区域赋值

        //数据提交
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
            if(!validata()){
                return false;
            }

            var formData = new FormData($("#formData")[0]);

            var discript =  CKEDITOR.instances.TextArea2.getData();


            formData.append('discript', discript);


            $.ajax({
                url: '../UserInfo/add',
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
                            localStorage.setItem('address', '../UserInfo/showlist');//保存当前地址,避免刷新跳转
                            $('#content').load('../UserInfo/showlist');
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
            content: '../UserInfo/editImg/id/' + id,
            cancel: function () {
                location.reload();
            }
        });
    });


    //初始化需要运行的东西
    function init() {
        //初始化
        var editor2 = CKEDITOR.replace('TextArea2', {
            filebrowserImageUploadUrl: '../manager/ck_upload'
        });

        var inputVal = JSON.parse(sessionStorage.getItem("inputVal"));
        //如果还没保存过输入，就定义一个空对象来保存
        if (inputVal == null) {
            var inputVal = {};
        }

        //回填输入
        $.each(inputVal, function (index, item) {
            $(document).find('input[name="' + index + '"],textarea[name="' + index + '"]').val(item);
        });

        editor2.setData(sessionStorage.getItem("editorcontent2"));//回填富文本区域


        //保存输入
        $('form input,textarea').keyup(function () {
            var name = $(this).attr('name');
            var val = $(this).val();
            inputVal[name] = val;
            sessionStorage.setItem('inputVal', JSON.stringify(inputVal));
        });
        //保存富文本的值
        editor2.on('change', function (event) {
            sessionStorage.setItem('editorcontent2', this.getData());
        });
    }


    //数据验证
    function validata() {
        var formVal = $('form input,textarea');

        //标题
        if ($(formVal[2]).val() == '') {
            layer.msg($(formVal[2]).attr("errorMsg"), {
                icon: 2,
                time: 2000
            });
            return false;
        }


        return true;

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

</script>
<?php }} ?>