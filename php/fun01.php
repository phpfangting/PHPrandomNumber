<?php 

#a		
//echo addcslashes('anfsdfds012898889', 'a..z0..9');
// echo addslashes("my name is liu'dehua");
// $money=199899213.98;
// $money = chunk_split($money,'3',',');
// echo $money;
// $money = explode('.', $money);

// echo bcdiv($money[0], 10000);
// $str=preg_replace('/\d/', 'funck', 'sswqwqdwqdwq2323dc2321r2');
// echo $str;
// $word ="My name is liuft";
// $d=levenshtein('liuft', $word);
// echo $d;
$info = new SplFileInfo('foo.txt');
var_dump($info->getExtension());