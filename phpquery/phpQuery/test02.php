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

   var_dump($html);

  