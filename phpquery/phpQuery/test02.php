<?php  



	require('phpQuery/phpQuery.php');
	$html = '<div auth_is="1" data-href="www.baidu.com"></div><div auth_is="1" data-href="www.sina.com"></div><span></span>';
	$doc = phpQuery::newDocument($html, $contentType = null);

   $div =  pq("div[auth_is='1']");

   foreach ($div as $key => $val) {
   	 if($val->getAttribute('data-href')=='www.baidu.com'){
   	 	pq($val)->remove();
   	 }

   }

   $html =  $doc->html();

  

  $t = 1524704400;
  $e = 1525402741;
  // echo ($e-$t)/3600;

function strLength($str,$charset='utf-8'){  
		if($charset=='utf-8') $str = iconv('utf-8','gb2312',$str);  
		
		$num = strlen($str);  
		echo $num;exit;
		$cnNum = 0;  
		for($i=0;$i<$num;$i++){  
		if(ord(substr($str,$i+1,1))>127){  
		$cnNum++;  
		$i++;  
		}  
		}  
		$enNum = $num-($cnNum*2);  
		$number = ($enNum/2)+$cnNum;  
		return ceil($number);  
}  

$str = '';

 $str = mb_convert_encoding($str,'gb2312','utf-8');

 // echo mb_strlen('我是少时诵诗书a看');

  $arr=[1,2,3,4,5,6,7];
  $arr2=[1,2,3];

  $temp= $arr2+$arr;

  print_r($temp);