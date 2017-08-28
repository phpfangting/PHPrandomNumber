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
function xrange($start, $end, $step = 1) {  
    for ($i = $start; $i <= $end; $i += $step) {  
        yield $i;  
    }  
}  

foreach (xrange(1, 1000000) as $num) {  
    echo $num, "\n";  
}  