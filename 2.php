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
<<<<<<< HEAD

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
=======

// $str="8138136%2C8137071%2C8138103%2C8136998";
// echo urldecode($str);


// function numberFormat($number,$n=1){
// 	$decimal='';//小数部分
// 	//没有小数点
// 	if(strrpos($number,'.')===false){
// 			$decimal = str_repeat('0', $n);
		
// 			return $number.'.'.$decimal;
// 	}else{
// 		  $numberArr = explode('.',$number);//分隔数值为数组
// 		  $number = $numberArr[0];//取出整数部分
		 
// 		  for($i=0;$i<$n;++$i){
// 		  	if(isset($numberArr[1][$i])){
// 		  		$decimal .=	$numberArr[1][$i];
// 		  	}else{
// 		  		$decimal .=	'0';
// 		  	}
// 		  }
// 		  return $number.'.'.$decimal;

// 	}
// }
// $total = numberFormat(12123);
// print_r($total);
// echo json_encode('M00/01/F6/CgoKYVkiPnyAP44GAAOb12oZu0k841.jpg');
// $data = json_decode('{"memberId":24977,"relationId":1,"relationType":2}',true);
// var_export($data);
// function xrange($start, $end, $step = 1) {  
//     for ($i = $start; $i <= $end; $i += $step) {  
//         yield $i;  
//     }  
// }  

// foreach (xrange(1, 1000000) as $num) {  
//     echo $num, "\n";  
// }  
$header = ['alg'=>'HS256','typ'=>'JWT'];
$payload = ['iss'=>'dpbkNJY089bdeJk6PxAofj6ti19rsTRZ'];
$secret_key = 'xVX7ousYSEU7447L42bELx6Wd3ydjdjC';

function jwt($header = [], $payload = [], $secret_key = '', $secret_base64_encode = false)
{
    $encoded_header = base64_encode(json_encode($header));
    $encoded_payload = base64_encode(json_encode($payload));
    $header_payload = $encoded_header . '.' . $encoded_payload;
    if ($secret_base64_encode) $secret_key = $secret_key = base64_encode($secret_key);
    $signature = base64_encode(hash_hmac('sha256', $header_payload, $secret_key, true));
    return $header_payload . '.' . $signature;
}

$token = jwt($header,$payload,$secret_key);

$params = 'f=1&b=2&e=3&d=9&h=100&a=90';//参数
$key='key=abcdefg';
$secret = 'kjdfkdfgergnre%90';

$arr = explode('&', $params); asort($arr);
$paramstr = implode("&", $arr);
$sign = strtoupper(md5($secret.$paramstr));



var_dump($paramstr);








>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
