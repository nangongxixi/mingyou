<?php /* Smarty version Smarty-3.1.6, created on 2017-11-22 14:36:52
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Query\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28605a13dcd3aa5cc5-02550568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c16a909bcefc6f6046e988f4509bcfe0a125d62' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Query\\index.html',
      1 => 1511332589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28605a13dcd3aa5cc5-02550568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a13dcd3adc7d',
  'variables' => 
  array (
    'other' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a13dcd3adc7d')) {function content_5a13dcd3adc7d($_smarty_tpl) {?><span id="head"></span>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
<script src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>
<script src="<?php echo @STATIC_URL;?>
layer/layer.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'])){?>
<div style="margin: 0 auto; margin: 0 0 35px"><img width="100%" src="/<?php echo $_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'];?>
"></div>
<?php }?>
<div class="main dh-cx">
    <div class="left" style="width: 500px;overflow: hidden; margin-right: 30px; float: left"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['content'];?>
</div>
    <ul>
        <li>
            <h3>工作人员查询</h3>
            <div>
                <input type="text" name="name" placeholder="员工姓名" class="in" typeID="0">
                <input type="button" class="btn">
            </div>
        </li>
        <li>
            <h3>参录企业查询</h3>
            <div>
                <input type="text" name="buniess" placeholder="企业名称" class="in" typeID="1">
                <input type="button" class="btn">
            </div>
        </li>
    </ul>
</div>


<span id="bottom"></span>


<script>
    $(function () {
        $('#head').load('/index.php/Home/Common/head');
        $('#bottom').load('/index.php/Home/Common/bottom');

        //查询数据
        $('input[type="button"]').click(function () {
            var val = $.trim($(this).prev().val());
            //var name = $(this).prev().attr('name');
            var type = $(this).prev().attr('typeID');
            var data = {"type": type, "keyword": val};

            if (val.length == 0) {
                layer.msg('请填写查询内容', {
                    icon: 2,
                    time: 2000,
                    offset: ['40%', '50%' - 210]
                });
                return false;
            }

            $.ajax({
                url: '/index.php/Home/Query/QueryCenter',
                type: "post",
                // dataType: "json",
                data: data,
                // async: false,
                success: function (returnJSON) {
                    console.log(returnJSON);
                    var content;
                    if (returnJSON.status) {
                        returnJSON.type == 0 ? content = layer_user : content = layer_buniess;
                        layer.open({
                            title: '查询结果',
                            shadeClose: true,
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['550px', '400px'], //宽高
                            offset: ['25%', '50%' - 320],
                            content: content,
                            success: function (layero, index) {
                                $.each(returnJSON.queryResult, function (index, item) {
                                    if (item) {
                                        $('#' + index).html(item);
                                    }
                                    if (index == 'img_url' && item) {
                                        $('#img_url').attr('src', '/' + returnJSON.queryResult.img_url);
                                    }
                                });
                            }
                        });
                    } else {
                        layer.msg(returnJSON.msg, {
                            icon: 2,
                            time: 2000,
                            offset: ['40%', '50%' - 210]
                        });
                    }
                }
            });
        });

        //工作人员详情
        var layer_user = '<div class="dh-cx" style="margin: 60px">' +
            '    <ul style="width: 220px !important; float: left; margin: 0">' +
            '        <li><i>工　　号：</i><em id="number">暂无…</em></li>' +
            '        <li><i>员工姓名：</i><em style="color: red;" id="name">暂无…</em></li>' +
            '        <li><i>所属区域：</i><em id="area">暂无…</em></li>' +
            '        <li><i>职　　务：</i><em id="job">暂无…</em></li>' +
            '    </ul>' +
            '        <img id="img_url" width="200" height="220" src="/public/Home/img/default.jpg" style="margin-top: 7px">' +
            '</div>';

        //参录公司信息
        var layer_buniess = '<div class="dh-cx" style="margin: 30px">' +
            '    <ul style="width: 100% !important;  margin: 0">' +
            '        <li style="text-align: center; font-size: 16px; font-weight: bold; margin-bottom:15px " id="name">暂无…</li>' +
            '        <li><hr size="1" style="border-top:  1px solid #9F9F9F; width: 100%; margin-bottom: 15px"><i style="font-size: 14px" id="discript">暂无…</i></li>' +
            '    </ul>' +
            '</div>';

    });
</script>
<?php }} ?>