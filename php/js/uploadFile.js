/**
 * Created by liufangting on 2016/11/4.
 */
var uploadFile = {
    options: {
        url: '',//请求的url地址 [required]
        formId: '',//要提交的表单id [required]
        fileId: '',//文件上传input对应的id值 [required]
        iframeId: '',//新窗口对应的id值 [required]
        iframeName: '',//新窗口对应的名称 [required]
        imgId: ''//新窗口对应的名称 [required]
    },
    formObj: {},//表单对象
    fileObj: {},//文件对象
    iframeObj: {},//子窗口对象
    //初始化参数
    init: function (param) {
        for (k in param) {
            this.options[k] = param[k];
        }
        this.formObj = document.getElementById(this.options['formId']);
        this.fileObj = document.getElementById(this.options['fileId']);
        this.iframeObj = document.getElementById(this.options['iframeId']);
        this.imgObj = document.getElementById(this.options['imgId']);
        if (!this.formObj || !this.fileObj || !this.iframeObj) {
            console.log('error');
            return false;
        }
        _this = this;
    },
    //提交表单
    submitForm: function () {
        this.fileObj.onchange = function () {
            _this.formObj.submit();
        };
    },
    //监听子窗口
    listenEvent: function () {
        this.iframeObj.attachEvent ? this.iframeObj.attachEvent('onload', this.returnData) : this.iframeObj.onload = this.returnData;
    },
    //获取子窗口的数据
    returnData: function (event) {

        // var acceptData = JSON.parse(_this.iframeObj.contentWindow.document.body.innerHTML);

        // if (acceptData.data['url']) {
        //     _this.imgObj.setAttribute('src', acceptData.data['url']);
        // }
        _this.formObj.reset();
    },
    //处理子窗口的数据
    upload: function (param) {
        this.init(param);
        this.submitForm();
        this.listenEvent();
    }
};