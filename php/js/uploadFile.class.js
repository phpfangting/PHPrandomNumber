/**
 * Created by liufangting on 2016/11/4.
 */


function UploadFile(params) {

    //参数初始化
    var options = {
        formId: '',//要提交的表单id [required]
        fileId: '',//文件上传input对应的id值 [required]
        iframeId: '',//新窗口对应的id值 [required]
        imgId:''
    };

    //定义参数
    for (k in params) {
        options[k] = params[k];
    }

    //获取dom对象
    var formObj = document.getElementById(options.formId);//表单
    var fileObj = document.getElementById(options.fileId);//文件
    var ifrObj = document.getElementById(options.iframeId);//窗口
    var imgObj = document.getElementById(options.imgId);//窗口

    //提交表单上传图片
    fileObj.onchange = function () {
        formObj.submit();
    }

    //监听子窗口是否有内容加载进来
    ifrObj.attachEvent ? ifrObj.attachEvent('onload', callback) : ifrObj.onload = callback;

    //处理子窗口的内容
    function callback() {
        var acceptData = JSON.parse(ifrObj.contentWindow.document.body.innerHTML);
        if (acceptData.data['url']) {
            imgObj.setAttribute('src', acceptData.data['url']);
        }
        formObj.reset();
    }

}