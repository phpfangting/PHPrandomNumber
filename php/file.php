<?php 

$file = fopen('./a.txt','r') or die('open the file is failed');
// echo  fread($file,filesize('./a.txt'));
// echo fgets($file);

// while(!feof($file)){

// 	echo fgets($file);
// }


fclose($file);


$file = fopen('./a.txt','a+');

fwrite($file, "woshini\r\n");

fclose($file);

$file = fopen('./a.txt','r+');

echo  fread($file, filesize('./a.txt'));
fclose($file);



