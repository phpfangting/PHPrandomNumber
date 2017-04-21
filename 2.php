<?php  


	//发布  
// $redis = new Redis();  
// $redis->connect('127.0.0.1', 6379);  
// $message='新年快乐';  
// $ret=$redis->publish('中央广播电台',$message);  
//生成唯一订单号  
function build_order_no(){  
    return date('ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);  
}  

$str="8138136%2C8137071%2C8138103%2C8136998";
echo urldecode($str);