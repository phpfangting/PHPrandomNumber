<<<<<<< HEAD
/**
 * Created by liufangting on 2016/10/26.
 * 这谁写的代码辣么牛逼
 */

//手机区号类
countryCodeSelect = {
    options: {
        'url': '',
        'countryCodeMobile': '',
        'selectIdMobile': '',
        'countryCodePhone': '',
        'selectIdPhone': ''
    },
    //初始化参数
    init: function (options) {

        for (k in options) {
            this.options[k] = options[k];
        }
    },
    //获取数据
    getData: function () {
        var dataTemp = {};

        $.ajax({
            url: this.options.url,
            data: "",
            async: false,
            dataType: "json",
            success: function (data) {
                dataTemp = data.data;
            }
        });
        return dataTemp;
    },
    //填充数据到表单
    fillData: function (selectId, countryCode) {

        if (selectId != '') {

            var selectStr = '';

            for (k in this.options.dataTmp) {
                if (countryCode == k) {
                    selectStr += "<option value='" + k + "' selected='selected'>" + this.options.dataTmp[k] + "</option>";
                } else {
                    selectStr += "<option value='" + k + "'>" + this.options.dataTmp[k] + "</option>";
                }
            }

            $('#' + selectId).html(selectStr);
        }
    },

    //加载数据
    onloadData: function (options) {
        //初始化参数
        this.init(options);
        //获取数据
        if (jQuery.isEmptyObject(this.options.dataTmp)) {
            this.options.dataTmp = this.getData();
        }
        //填充手机表单
        this.fillData(this.options.selectIdMobile, this.options.countryCodeMobile);
        //填充电话表单
        this.fillData(this.options.selectIdPhone, this.options.countryCodePhone);
    }

};

=======
/**
 * Created by liufangting on 2016/10/26.
 * 这谁写的代码辣么牛逼
 */

//手机区号类
countryCodeSelect = {
    options: {
        'url': '',
        'countryCodeMobile': '',
        'selectIdMobile': '',
        'countryCodePhone': '',
        'selectIdPhone': ''
    },
    //初始化参数
    init: function (options) {

        for (k in options) {
            this.options[k] = options[k];
        }
    },
    //获取数据
    getData: function () {
        var dataTemp = {};

        $.ajax({
            url: this.options.url,
            data: "",
            async: false,
            dataType: "json",
            success: function (data) {
                dataTemp = data.data;
            }
        });
        return dataTemp;
    },
    //填充数据到表单
    fillData: function (selectId, countryCode) {

        if (selectId != '') {

            var selectStr = '';

            for (k in this.options.dataTmp) {
                if (countryCode == k) {
                    selectStr += "<option value='" + k + "' selected='selected'>" + this.options.dataTmp[k] + "</option>";
                } else {
                    selectStr += "<option value='" + k + "'>" + this.options.dataTmp[k] + "</option>";
                }
            }

            $('#' + selectId).html(selectStr);
        }
    },

    //加载数据
    onloadData: function (options) {
        //初始化参数
        this.init(options);
        //获取数据
        if (jQuery.isEmptyObject(this.options.dataTmp)) {
            this.options.dataTmp = this.getData();
        }
        //填充手机表单
        this.fillData(this.options.selectIdMobile, this.options.countryCodeMobile);
        //填充电话表单
        this.fillData(this.options.selectIdPhone, this.options.countryCodePhone);
    }

};

>>>>>>> ade65abf0e33ef7c43391325c8e8637a51859c00
