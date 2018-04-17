<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/26
 * Time: 16:36
 */
ob_start();



for ($i=0;$i<10;++$i){
	echo str_pad(" ",11024);
    echo $i;
    sleep(1);
    flush();
    ob_flush();

}