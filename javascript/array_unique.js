$('#itemIds').blur(function () {
        var _val = $(this).val()
        if (_val) {
            //分割字符串为数组并去除空值
            var _itemIds = _val.replace(/[\r\n]/g, ',').split(',').filter(function (val) {
                return val != '';
            });

            if (_itemIds.length > 0) {
                var _repeatStr = array_repeat(_itemIds);//判断是否有重复元素
                if(_repeatStr){
                    toastr.warning('重复的拍品ID:<br>' + _repeatStr);
                }
                _itemIds = array_unique(_itemIds);
                $(this).val()
            }
        }
    });

    /**
     * 检出重复的值
     * @param arr
     * @returns {string}
     */
    function array_repeat(arr) {
        len = arr.length;
        var temp = [];
        for (var i = 0; i < len; i++) {
            if (arr.indexOf(arr[i]) !== arr.lastIndexOf(arr[i]) && (arr[i])) {
                temp.push(arr[i]);
            }
        }
        return temp.length > 0 ? temp.join(',') : '';
    }

    /**
     * 去重
     * @param arr
     * @returns {Array}
     */
    function array_unique(arr) {
        len = arr.length;
        var temp = [];
        for (var i = 0; i < len; i++) {
            if (arr.indexOf(arr[i]) === i) {
                temp.push(arr[i]);
            }
        }
        return temp;
    }
