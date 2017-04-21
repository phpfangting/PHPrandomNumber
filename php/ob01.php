<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 14:28
 */


ob_start();

for ($i = 0; $i < 20; $i++) {

    echo 'PHP是世界上最好的语言<br>';
    // echo str_pad(' ', 1000);
    // ob_end_flush();
    ob_flush();
    flush();
    sleep(1);
}