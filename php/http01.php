<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/22
 * Time: 11:11
 */


/**
 * 1、请求行  method  resources 协议
 * 2、请求头  key:value
 *           host:localhost
 *           connction:keep-alive
 *           content-length:20
 *           cache-control:max-age=0
 * 3、主体
 */

?>

<form action="/php/test01.php" method="post">
    <input type="text" value="" name="username">
    <input type="submit" name="btn" value="submit">
</form>
