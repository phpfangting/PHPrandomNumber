<?php
	//抓取图片
		$str = "<img src='a.jpg' />";
		$preg = '/(?<!src=)[^(\'|\")]*\.(jpg|png|gif)/';
	    preg_match_all($preg, $str, $data);
	//练习题

	    $str = 'zhangsan b  liasi a  wangsan';
	    preg_match_all('/[a-zA-Z]+ (?<!=a)/', $str, $data);
	    // var_dump($data);
	//sscanf
	
	    $str = 'sadsdas adada adada  ada ';
	    $preg = '/(?=da)[a-zA-Z]*/';
		preg_match_all($preg, $str, $data);
		// print_r($data);
		$str = '';
		$str .= "<img src='a.jpg' />";
		$str .= "<img src='a.jpg' />";
		$str .= "<img src='a.jpg' />"; 
		$preg = '/(?<!src=)[^\']*jpg/';
		preg_match_all($preg, $str, $data);
		print_r($data);


