<?php 



	$host = '127.0.0.1';
	$port = 80;
	$link = fsockopen($host,$port);

	$requestData = "GET /php/http/test02.php HTTP/1.1\r\n";
	$requestData .="HOST: www.test.com\r\n";
	$requestData .="\r\n";

    fwrite($link, $requestData);

    while(!feof($link)){
    	 echo fgets($link);
    }