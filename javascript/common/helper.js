/**
 * Created by liufangting on 2017/12/8.
 */


/**
 * 移除类
 */
function formRemoveClass() {
    $('div.form-group').removeClass('has-error');
}

/**
 * 添加类
 * @param fieldName
 */
function formAddClass(fieldName) {
    $('#' + fieldName).parent().parent('div.form-group').addClass('has-error');
}

/**
 *
 * @param formID 要提交的表单 (表单id号)
 * @param redirctUrl  跳转地址 (路由)
 * @param method    提交的方式 (get|post)
 * @param type 1 回退  2 跳转 3 局部加载
 */
function commitForm(formID, redirctUrl, method, type) {

    if (typeof (method) == undefined || ['get', 'post'].indexOf(method) == -1) {
        method = 'post';
    }

    if (isNaN(type)) {
        type = 1;
    }
    console.log(type)
    var _form = $('#' + formID);
    $.ajax({

        url: _form.attr('action'),
        method: method,
        data: _form.serialize(),
        async: false,
        dataType: "json",
        timeout : 1000,
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        success: function (data) {
            formRemoveClass();
            if (data.status == 200) {
                toastr.success(data.message);
                if (type == 1) {
                    history.back(1);
                } else if (type == 2) {
                    location.href = redirctUrl;
                } else {
                    $.pjax.reload('#pjax-container');
                }

            } else if (data.status == 201) {

                if (typeof data.message == 'string') {
                    toastr.warning(data.message);
                } else {
                    for (k in data.message) {
                        formAddClass(k);
                        if (data.message[k].length > 1) {
                            for (kk in data.message[k]) {
                                toastr.warning(data.message[k][kk]);
                            }
                        } else {
                            toastr.warning(data.message[k][0]);
                        }

                    }
                }

            } else {
                toastr.error(data.message);
            }
        },
        complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
            if(status=='timeout'){//超时,status还有success,error等值的情况
                ajaxTimeoutTest.abort();
                toastr.error('接口超时');
            }
        },
        error: function () {
            toastr.error('error');
        }
    });
}

function exportExcel(e, url, formID) {
    $(e).attr('target', '_blank');
    if (formID) {
        console.log($('#' + formID).serialize());
        $(e).attr('href', url + '?' + $('#' + formID).serialize());
    } else {
        $(e).attr('href', url);
    }
}


/**
 * 表单提交
 * @param url
 * @param method
 * @param data
 * @param modalName
 * @param num
 */
function formAjax(url, method, data, modalName, num) {
    $.ajax({

        url: url,
        method: method,
        data: data,
        async: false,
        dataType: "json",
        timeout : 1000,
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        success: function (data) {
            formRemoveClass();
            if (data.status == 200) {


                if (modalName != '') {
                    $('#' + modalName + ' .num').text(num);
                    $('#' + modalName).modal();

                } else {
                    toastr.success(data.message);
                    $.pjax.reload('#pjax-container');
                }


            } else if (data.status == 201) {
                console.log(typeof data.message)
                if (typeof data.message == 'string') {
                    toastr.warning(data.message);
                } else {
                    for (k in data.message) {
                        formAddClass(k);
                        if (data.message[k].length > 1) {
                            for (kk in data.message[k]) {
                                toastr.warning(data.message[k][kk]);
                            }
                        } else {
                            toastr.warning(data.message[k][0]);
                        }
                    }
                }

            } else {
                toastr.error(data.message);
            }
        },
        complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
            if(status=='timeout'){//超时,status还有success,error等值的情况
                ajaxTimeoutTest.abort();
                toastr.error('接口超时');
            }
        },
        error: function () {
            toastr.error('error');
        }
    });
}

