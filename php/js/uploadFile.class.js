/**
 * Created by liufangting on 2016/11/4.
 */


function UploadFile() {

    this.options = {
        url: '',//请求的url地址 [required]
        formId: '',//要提交的表单id [required]
        fileId: '',//文件上传input对应的id值 [required]
        iframeId: '',//新窗口对应的id值 [required]
        iframeName: '',//新窗口对应的名称 [required]
        imgId: ''//新窗口对应的名称 [required]
    };
    this.formObj = {};//表单对象
    this.fileObj = {};//文件对象
    this.iframeObj = {};//子窗口对象
    this.init = function (param) {
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

    }
    this.submitForm = function (e) {

        this.fileObj.onchange = function () {
            e.formObj.submit();
        };

    }

    this.listenEvent = function () {
        var _uploadThis = this;
        this.iframeObj.attachEvent ? this.iframeObj.attachEvent('onload', this.returnData) : this.iframeObj.onload = this.returnData;
    }

    this.returnData = function () {
        var acceptData = JSON.parse(this.contentWindow.document.body.innerHTML);
        if (acceptData.data['url']) {
            _uploadThis.imgObj.setAttribute('src', acceptData.data['url']);
        }
        _uploadThis.formObj.reset();

    }

    this.upload = function (param) {

        this.init(param);
        this.submitForm(this);
        this.listenEvent();
    }
}