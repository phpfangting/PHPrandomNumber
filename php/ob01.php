<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 14:28
 */


//
for ($i = 0; $i < 20; $i++) {
    echo str_pad(' ', 4096);
    echo 'PHP是世界上最好的语言<br>';
    ob_flush();
    flush();
//
    // ob_end_flush();
//    ob_flush();
//    flush();
    sleep(1);
}

//ob_start();
//echo "abc-";
//header("content-type:text/html;charset=utf-8");
//echo "hello-";
//ob_end_flush();
//echo "aa-";
//echo ob_get_contents();

/**
 *
 * ob
 * echo 'abc-'
 * echo 'hello-'
 *
 *
 * pro
 * header();
 * echo 'abc-'
 * echo 'hello-'
 * echo 'aa-'
 *
 *
 */