<?php

// $data = [

<<<<<<< HEAD
//       ['name'=>'zhangsan','age'=>19],
// ];
=======
    'name'=>'zhangsan',
    'age'=>10
];
>>>>>>> dev



// foreach ($data as $key => $value) {
      
// }

<<<<<<< HEAD
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
=======
// extract($data);
// echo $name;

// $preg='/[\x{4e00}-\x{9fa5}]/iu';

// $str="你是我的谁....l阿拉拉了";
// preg_match_all($preg, $str, $data);
// print_r($data);

// $str = '<img src="a.jpg"><img src="b.jpg"><img src="c.jpg"><img src="d.jpg"><img src="e.jpg"><img src="f.jpg"><img src="j.jpg">';
// $preg = '/src=\"(.*?)\"/';
// preg_match_all($preg, $str, $data);

// $str="abc123,cdf345,lkdhello";
// $preg='/[a-zA-Z]+(?!\d+)/l ';
// preg_match_all($preg, $str, $rs);
// print_r($rs);

$a = fopen('./d.txt','rw');
$a = fread($a,filesize('./d.txt'));
$a = explode(PHP_EOL, $a);
print_r($a);

>>>>>>> dev
