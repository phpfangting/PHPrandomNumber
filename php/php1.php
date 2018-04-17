<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/16
 * Time: 17:21
 */

// $url ="http://www.phpweb.com/jinqipaimai/piclist?pageNumber=3";
// $pageNumber=1;
// $url = strpos($url, "pageNumber=$pageNumber") !== false ? str_replace("pageNumber=$pageNumber", "pageNumber=" . ++$pageNumber, $url) : (strpos($url, "") !== false ? $url . "&pageNumber=" . ++$pageNumber : $url . "?pageNumber=" . ++$pageNumber);
//$json = '{
//    "interestRateVo": {
//        "creditInterestRateFeeMax": 0.06,
//        "creditInterestRateFeeMin": 0.05
//    },
//    "code": "0000",
//    "msg": "0000"
//}';
//
//$data = json_decode($json,true);
//var_export($data);

// $text = "This is the Euro symbol '€'.";

// echo 'Original : ', $text, PHP_EOL;
// echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
// echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), PHP_EOL;

 // $filePath = "/storage/". iconv('CP1252', 'gbk', '学生成绩');
 // print_r($filePath)


// $data = array_merge(range('a','z'),range('A','Z'),range(0,9));
// var_export($data);
ob_start();
echo 'hello';

ob_flush();//ob缓存刷新到程序缓存,不关闭ob缓存

ob_end_clean();//清空ob缓存并关闭ob缓存
echo 'hello100';

$content = ob_get_contents();
echo "\n";
var_export($content);