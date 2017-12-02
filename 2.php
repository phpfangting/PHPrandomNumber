<?php  


	//发布  
// $redis = new Redis();  
// $redis->connect('127.0.0.1', 6379);  
// $message='新年快乐';  
// $ret=$redis->publish('中央广播电台',$message);  
//生成唯一订单号  
// function build_order_no(){  
//     return date('ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);  
// }  

// $str="8138136%2C8137071%2C8138103%2C8136998";
// echo urldecode($str);

// function xrange($start, $end, $step = 1) {  
//     for ($i = $start; $i <= $end; $i += $step) {  
//         yield $i;  
//     }  
// }  

// foreach (xrange(1, 1000000) as $num) {  
//     echo $num, "\n";  
// }  

for ($i=1; $i<1000000 ; ++$i) { 
	echo $i,"\n";
}