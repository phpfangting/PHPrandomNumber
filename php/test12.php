<?php

$data = [

    'name'=>'zhangsan',
    'age'=>10
];



// foreach ($data as $key => $value) {
      
// }

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

