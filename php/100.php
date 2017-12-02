<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/15
 * Time: 15:32
 */
// $str = 'ferferfregergregreegergregregre 
// 你是我饿分为二分二分沃尔夫  
// ,wefewfew99779ewfewfewfeelwefewfw
// 反而无法而无';
// //echo wordwrap($str,10,'<br/>');

// $date = range(1, date('t'));
// print_r($_GET);
$s=microtime(true);
echo "<a href='/php/100.php?" . http_build_query(['company' => '反而无法']) . "' >", 'dssdsd', "</a>";
$e=microtime(true);

echo $e-$s;