<?php  

	$str = "<div auth_is='1' data-href='baidu.com'>hello</div><a></a><div auth_is='1' data-href='xinlamng.com'>sdads</div>";


	 // $preg='/<div.*auth_is=[\'|"]1[\'|"].*data-href=[\'|"](.*)[\'|"].*>.*?<\/div>/i';

	$preg = '/<div auth_is=\'1\' data-href=["|\'](.*)["\']>.*?<\/div>/i';

	preg_match_all($preg, $str, $data);

	echo '<pre>';
	print_r($data);