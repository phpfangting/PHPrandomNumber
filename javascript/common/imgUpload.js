function ImgUpload(config) {

    this.containerId = config.containerId,//加载图片的容器
        this.fileId = config.fileId, //文件的ID
        this.style = config.style;
    this.fileObject = null;
    this.containerObject = null;
    var _this = this;

    this.init = function () {
        this.fileObject = document.getElementById(this.fileId);
        this.containerObject = document.getElementById(this.containerId);
        this.preview()
    }

    /**
     * 图片预览
     *
     */
    this.preview = function () {

        if (typeof(FileReader) == 'undefined') {
            if (!/\.jpg$|\.png$|\.gif$/i.test(this.fileObject.value)) {
                alert('只能上传图片');
            } else {
                _this.showImg(this.fileObject.value);
            }

        } else {

            var fileResource = this.fileObject.files;

            for (var i = 0, length = fileResource.length; i < length; i++) {
                if (this.validate(fileResource[i].type) == false) {
                    alert('只能上传图片');
                    continue;
                } else {
                    var reader = new FileReader();
                    reader.readAsDataURL(fileResource[i]);
                    reader.onload = function (event) {
                        _this.showImg(event.target.result);
                    }
                }
            }

        }
        
    }

    /**
     *删除图片
     *
     */
    destroy = function (e) {
        _this.containerObject.removeChild(e);
    }

    /**
     * 验证上传文件的格式
     * @returns {boolean}
     */
    this.validate = function (type) {
        if (!/image\/\w+/.test(type)) {
            return false;
        }
        return true;
    }

    /**
     * 追加图片到img
     * @param result
     */
    this.showImg = function (result) {

        var imgObject = document.createElement('img');
        imgObject.setAttribute('src', result);
        imgObject.style = this.style;
        imgObject.setAttribute('onclick', "destroy(this)");
        this.containerObject.appendChild(imgObject);
    }
}