(function ($, undefined) {
    //定义选择器的构造函数
    var Selecter = function (opt) {
        this.defaults = {
            'url': '',			//请求行政区域的url，获取json数据
            'countryId': '',		//传入的select的国家ID<select id="countryId"/>
            'proviceId': '',		//传入的select的省份ID
            'cityId': '',		//传入的select的城市ID
            'countyId': '',		//传入的select的区县ID
            'countryVal': '',	//传入的select的国家的默认值，用于默认选中国家
            'proviceVal': '',	//传入的select的省份的默认值，用于默认选中省份
            'cityVal': '',		//传入的select的城市的默认值，用于默认选中城市
            'countyVal': '',	 	//传入的select的区县的默认值，用于默认选中区县
            'level': '4',        //判断是显示4级关联还是3级关联
            'saveType': 'name',  //saveType:只有id和name两个属性，id保存数字值，name保存字符串值
            'defPid': '0',   	//国家父ID的默认值或者省份父ID的默认值
            'defSelectedId': '0' //默认选中的国家Id或者省份ID
        };
        this.options = $.extend({}, this.defaults, opt);//合并参数
    }
    //定义选择器的方法
    Selecter.prototype = {
        initSelecter: function (obj) {
            //--------------------4级联动初始化 start----------------------------
            if (this.options.level == '4') {
                if (this.options.countryVal == "") {
                    //没有默认值就初始化加载所有国家
                    $("#" + this.options.countryId).append("<option value=''>国家</option>");
                    this.insertRegionData(this.options.countryId, this.options.defPid, this.options.defSelectedId);
                    this.changeCountry();
                } else {
                    this.setSelectVal();//初始化并选中国家默认选项
                }
            }
            //--------------------4级联动初始化 end------------------------------
            //--------------------3级联动初始化 start----------------------------
            if (this.options.level == '3') {
                //省份初始化
                if (this.options.proviceVal == "") {
                    $("#" + this.options.proviceId).append("<option value=''>省份</option>");
                    this.insertRegionData(this.options.proviceId, this.options.defPid, this.options.defSelectedId);
                    this.changeProvice();
                } else {
                    this.setSelectVal();
                }
            }
            //--------------------3级联动初始化 end-----------------------------



            //--------------------绑定change事件  start----------------------------
            if (this.options.countryId != "")
                //bind 第二个参数原来用的是obj
                $("#" + this.options.countryId).bind("change", this, function (event) {
                    event.data.changeCountry();
                });
            if (this.options.proviceId != "")
                $("#" + this.options.proviceId).bind("change", this, function (event) {
                    event.data.changeProvice();
                });
            if (this.options.cityId != "")
                $("#" + this.options.cityId).bind("change", this, function (event) {
                    event.data.changeCity();
                });
            //--------------------绑定change事件  end-------------------------------
        },
        setSelectVal: function () {
            if (this.options.countryVal != "") {
                $("#" + this.options.countryId).append("<option value=''>国家</option>");
                this.insertRegionData(this.options.countryId, this.options.defPid, this.options.countryVal);
                //按照地区名称为判断条件
                if (this.options.saveType == 'name')
                    this.setSelected(this.options.countryId, this.options.countryVal);//匹配就选中
                else
                    $("#" + this.options.countryId).find("option[value=" + this.options.countryVal + "]").attr("selected", true);//直接匹配该元素并选中
                this.changeCountry();
            }
            if (this.options.proviceVal != "") {
                if (this.options.level == '3') {
                    $("#" + this.options.proviceId).append("<option value=''>省份</option>");
                    this.insertRegionData(this.options.proviceId, this.options.defPid, this.options.proviceVal);
                }
                if (this.options.saveType == 'name')
                    this.setSelected(this.options.proviceId, this.options.proviceVal);
                else
                    $("#" + this.options.proviceId).find("option[value='" + this.options.proviceVal + "']").attr("selected", true);
                this.changeProvice();
            }
            if (this.options.cityVal != "") {
                if (this.options.saveType == 'name')
                    this.setSelected(this.options.cityId, this.options.cityVal);
                else
                    $("#" + this.options.cityId).find("option[value='" + this.options.cityVal + "']").attr("selected", true);
                this.changeCity();
            }
            if (this.options.countyVal != "") {
                if (this.options.saveType == 'name')
                    this.setSelected(this.options.countyId, this.options.countyVal);
                else
                    $("#" + this.options.countyId).find("option[value='" + this.options.countyVal + "']").attr("selected", true);
            }
        },
        setSelected: function (id, name) {
            $("#" + id).find("option").each(function () {
                if ($(this).text() == name) {
                    $(this).attr("selected", true);
                }
            });
        },
        changeCountry: function () {
            this.emptyOptionsData(1);
            if ($('#' + this.options.countryId).val() == 0) {
                return false;
            }
            this.insertRegionData(this.options.proviceId, $("#" + this.options.countryId).val(), "");
        },
        changeProvice: function () {
            this.emptyOptionsData(2);
            if ($('#' + this.options.proviceId).val() == 0) {
                return false;
            }
            this.insertRegionData(this.options.cityId, $("#" + this.options.proviceId).val(), "");
        },
        changeCity: function () {
            this.emptyOptionsData(3);
            if ($('#' + this.options.cityId).val() == 0) {
                return false;
            }
            this.insertRegionData(this.options.countyId, $("#" + this.options.cityId).val(), "");
            if ($("#" + this.options.countyId).find("option").size() == 1)
                $("#" + this.options.countyId).hide();
            else
                $("#" + this.options.countyId).show();
        },
        insertRegionData: function (selectId, parentId, initValue) {
            $.ajax({
                url: this.options.url,
                data: "parentId=" + parentId,
                async: false,
                dataType: "json",
                success: function (data) {
                    var si = 0;
                    data = data.data;
                    for (var i = 0; i < data.length; i++) {
                        if (initValue == data[i].regionId) {
                            $("#" + selectId).append("<option selected='selected' value=" + data[i].regionId + ">" + data[i].regionName + "</option>");
                            $("#" + selectId)[0].selectedIndex = i + 1;
                            si = i + 1;
                        } else {
                            $("#" + selectId).append("<option value=" + data[i].regionId + ">" + data[i].regionName + "</option>");
                            if (initValue == "") {
                                $("#" + selectId)[0].selectedIndex = 0;
                            }
                            if (si != 0) {
                                $("#" + selectId)[0].selectedIndex = si;
                            }
                        }
                    }
                },
                error: function () {
                    alert("网络异常");
                }
            });
        },
        emptyOptionsData: function (level) {
            switch (level) {
                case 1:
                    $("#" + this.options.proviceId).empty();
                    $("#" + this.options.cityId).empty();
                    $("#" + this.options.countyId).empty();
                    $("#" + this.options.proviceId).append("<option value=''>省份</option>");
                    $("#" + this.options.cityId).append("<option value=''>城市</option>");
                    $("#" + this.options.countyId).append("<option value=''>市区县</option>");
                    break;
                case 2:
                    $("#" + this.options.cityId).empty();
                    $("#" + this.options.countyId).empty();
                    $("#" + this.options.cityId).append("<option value=''>城市</option>");
                    $("#" + this.options.countyId).append("<option value=''>市区县</option>");
                    break;
                case 3:
                    $("#" + this.options.countyId).empty();
                    $("#" + this.options.countyId).append("<option value=''>市区县</option>");
                    break;
            }
        }
    }
    //在插件中使用Selecter对象
    $.fn.citySelect = function (options) {
        //创建Selecter的实体
        var sel = new Selecter(options);
        //调用其方法
        sel.initSelecter(sel);
    }
})(jQuery);
