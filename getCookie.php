<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/12/11
 * Time: 10:12
 */

print_r($_COOKIE);




?>
<script src="./public/jquery-1.8.3.min.js"></script>
<form action="" id="form1">
    <input type="text" name="username" value="liuft">
    <button name="btn" id="btn" type="button">ok</button>
</form>


<script>
    $('#btn').click(function () {
        $.ajax({
            url:'http://47.95.250.84/posts',
            data:$('#form1').serialize(),
            jsonp: 'jsonp',
            xhrFields: {withCredentials: true},
            crossDomain: true,
            success:function (data) {
                console.log(data);
            }
        })
    });
</script>
