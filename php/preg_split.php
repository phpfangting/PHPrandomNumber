<?php 
	
	//字符串截取

	$str = '我在测试这个字符串';
	$result = preg_split("//u", $str,-1,PREG_SPLIT_NO_EMPTY);
	$result = implode('',array_slice($result, 2,2)) ;

	//print_r($result);

	$str = '我在测试这个字符串';

	$str = mb_substr($str, 2,2,'utf8');

	// echo $str;

	$result = str_split('sdfsdfds');
	// print_r($result);


	//千分位
	$number = '98934900278.98766';
	$numberArr = explode('.', $number);

	if(!empty($numberArr[1])){
		$numberInt = $numberArr[0];
		// $numberFloat = $numberArr[1]>10?$numberArr[1][0].$numberArr[1][1]:$numberArr[1][0];
		$numArr = str_split($numberArr[1]);
		$numberFloat = implode('',array_splice($numArr,0,2)) ;
		
	}else{
		die('数值不合法');	
	}
	$numberInt = strrev($numberInt);
	$numberInt = chunk_split($numberInt,3,',');
	$numberInt = strrev($numberInt);
	$number = trim($numberInt,',').'.'.$numberFloat;
	print_r($number);

	$number = 98934900278.987;
	$number = number_format($number,2);
	// print_r($number);



	$str='hello';
	$$str = 'sfsfrf';

	echo $$str;