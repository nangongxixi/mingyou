<?php

namespace Model;

use Think\Model;

class LogModel extends Model{    
    
    protected $patchValidate    =   true;
    protected $_validate        =   array(        
        //验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        //验证用户名,require必须填写项目
        array('log_name','require','必须选择项目'),
		array('log_report_user','require','必填'),
        array('log_type','require','必须选择事件类型'),        
        array('log_describe','require','事件详细描述不能为空'),
		array('log_processing_method','require','处理方法及步骤不能为空'),
		array('log_deal_user','require','请选择处理人'),
    );     
}
