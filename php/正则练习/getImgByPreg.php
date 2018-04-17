<?php
	//抓取图片

		// $str = "<img src='a.jpg' />";
		// $preg = '/(?<!src=)[^(\'|\")]*\.(jpg|png|gif)/';
	 //    preg_match_all($preg, $str, $data);
	 //    print_r($data);

	//练习题

	    $str = 'zhangsan b  liasi a  wangsan';
	    preg_match_all('/[a-zA-Z]+ (?<!=a)/', $str, $data);
	    // var_dump($data);
	//sscanf

	 //    $str = 'sadsdas adada adada  ada ';
	 //    $preg = '/(?=da)[a-zA-Z]*/';
		// preg_match_all($preg, $str, $data);
		// print_r($data);
		// $str = '';
		// $str .= "<img src='a.jpg' />";
		// $str .= "<img src='a.jpg' />";
		// $str .= "<img src='a.jpg' />"; 
		// $preg = '/(?<!src=)[^\']*jpg/';
		// preg_match_all($preg, $str, $data);

		// $str='aageacwgewcaw';
		// $pattern='/a\w*c/i';
		// $str=preg_match_all($pattern, $str,$data);

//正向查找
// $str = "abcsb abcjian abcwang abcli";
// $pattern = '/abc(?=sb)/i';
// preg_match_all($pattern, $str, $data);
// print_r($data);

//反向查找

$img = '<img src="a.png" /> <img src="b.jpg" />';

$pattern='/(?<=src=)\"\w+\.(jpg|png)\"/';
preg_match_all($pattern,$img, $data);
print_r($data);

