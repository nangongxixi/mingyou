    var interfaceURL = 'http://192.168.0.187:8082/';

/*
 * 带参数的接口请求
 * APIname:接口名称  dataArr：参数
 * return 接口返回的数据
 */

function getJsonData(APIname, dataArr) {
    var getData;
    $.ajax({
        url: interfaceURL + APIname,
        type: "post",
        dataType: "json",
        data: dataArr,
        async: false,
        success: function (returnJSONN) {
            getData = returnJSONN;
        }
    });
    return getData;
}

//获取当前时间
function nowTime() {
    var myDate = new Date();
//获取当前年
    var year = myDate.getFullYear();
//获取当前月
    var month = myDate.getMonth() + 1;
//获取当前日
    var date = myDate.getDate();
    var h = myDate.getHours();       //获取当前小时数(0-23)
    var m = myDate.getMinutes();     //获取当前分钟数(0-59)
    var s = myDate.getSeconds();

    var now = year + '-' + p(month) + "-" + p(date) + " " + p(h) + ':' + p(m) + ":" + p(s);
    return now;
}
function p(s) {
    return s < 10 ? '0' + s : s;
}


