<?php

// $data = [

//       ['name'=>'zhangsan','age'=>19],
// ];



// foreach ($data as $key => $value) {
      
// }

// var_dump($value);

$param=[
	'keyword'=>'hhhh',
	'company'=>[
		1=>'aaaa',
	],
	'time'=>[1=>'today',2=>'']

];

$p = array_filter($param['time']);
// print_r($p);


// $str="abc9937534";

// $str[0]=100;
// echo $str[0];
$str="
	hi 
	my name is liuft
	wo hao xiang ncurses_inch(oid)
";
// echo nl2br($str);
$date = range(1,date('t'));
// print_r($date);

// $password = hash('sha256', '88439071');
// echo strlen($password);

echo http_build_query(['company'=>'反而无法']);