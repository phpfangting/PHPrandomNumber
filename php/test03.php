<?php 
// $filename='./b.txt';
// $mimeType='application/zip';
// header('Content-Disposition: attachement; filename='.$filename);
// header('Content-Type: '.$mimeType);
// header('Content-Length: '.filesize($filename));
// readfile($filename);


// $arr = mt_rand(1,100);
// print_r($arr);

// $arr = range('a','z');
// print_r($arr);

// $arr = range(1,date('t',time()));
// print_r($arr);

// $arr = rand(1,9);
// print_r($arr);

// echo pi();

// $str='dscds ';
// echo preg_replace('/^\s*|\s*$/', '', $str);

// echo dirname('./php/b.txt');
// $str='';
// echo str_pad($str, 20,'*');

// $str='';
// echo str_repeat('.', 13);

// $str="fwefewfewfewfe";
// $arr = str_split($str,3);
// print_r($arr);

// $str='abcdefg';
// echo strrev($str);

// $str='sdfdsd  ';
// echo wordwrap($str,6);

// $str = "dssd\nfewr\nwegwe\nwef";

// echo nl2br($str);

// echo str_shuffle('hello');
// $str="keyword=zhangsan&city=beijing";
// parse_str($str,$arr);
// print_r($arr);

// $str=977712314234.9298;
// echo number_format($str,2);

// $str = 'I am liuft';
// echo strtolower($str);
// echo strtoupper($str);

// echo ucfirst('i am liu');

// echo ucwords('i am liu');


// echo chr(89);

// echo ord('A');

// $str="adsfdsafsd";
// $w=substr_count($str, 'a');
// print_r($w);
$str = file_get_contents('./filterWord.php');
highlight_string($str);

