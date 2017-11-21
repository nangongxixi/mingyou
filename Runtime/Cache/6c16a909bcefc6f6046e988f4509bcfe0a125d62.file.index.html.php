<?php /* Smarty version Smarty-3.1.6, created on 2017-11-21 17:06:19
         compiled from "D:/phpStudy/WWW/mingyou/Home/View\Query\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28605a13dcd3aa5cc5-02550568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c16a909bcefc6f6046e988f4509bcfe0a125d62' => 
    array (
      0 => 'D:/phpStudy/WWW/mingyou/Home/View\\Query\\index.html',
      1 => 1511255136,
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

<?php if (isset($_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'])){?>
<div style="margin: 0 auto; margin: 0 0 35px"><img width="100%" src="/<?php echo $_smarty_tpl->tpl_vars['other']->value['bannerImg'][0]['img_url'];?>
"></div>
<?php }?>
<div class="main dh-cx">
    <div class="left" style="width: 500px;overflow: hidden; margin-right: 30px; float: left"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['content'];?>
</div>
    <ul>
        <li>
            <input type="hidden" name="type" value="2" id="type2">
            <h3>工作人员查询</h3>
            <div>
                <input type="text" name="name" placeholder="员工姓名" class="in">
                <input type="button" class="btn">
            </div>
        </li>
        <li>
            <input type="hidden" name="type" value="3" id="type3">
            <h3>参录企业查询</h3>
            <div>
                <input type="text" name="buniess" placeholder="企业名称" class="in">
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
            var val = $(this).prev().val();
            var name = $(this).prev().attr('name');
            var data = {"name": name, "value": val};

            $.ajax({
                url: '/index.php/Home/Query/QueryCenter',
                type: "post",
               // dataType: "json",
                data: data,
                async: false,
                success: function (returnJSON) {

                   console.log(returnJSON);
                    if (returnJSON.status) {
                        layer.msg(returnJSON.msg, {
                            icon: 1,
                            time: 2000
                        }, function () {
                            //_taq.push({convert_id: "74381099680", event_type: "form"});
                            sessionStorage.clear();
                            location.reload();
                            // localStorage.setItem('address', '../article/showlist');//保存当前地址,避免刷新跳转
                            // $('#content').load('../article/showlist');
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
</script>
<?php }} ?>