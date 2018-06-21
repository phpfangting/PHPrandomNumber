<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2018/4/24
 * Time: 13:39
 */

set_time_limit(-1);

$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=study;', 'root', '123456');

$sql = '';
$num=0;
for($i=0;$i<5000000;++$i){

	if($num>50000){
			$num = 0;
			$sql = trim($sql,',');
			$rs = $pdo->query("insert into member(tel,name,email,create_dt) values {$sql}");
			$sql = '';
			sleep(1);
	}

	$tel = rand();
	$username = randStr(6);
	$email = randStr(8).'@qq.com';
	$dt = time();
    $sql .= "({$tel},'{$username}','{$email}',{$dt}),";
    
    $num++;
}





function  randStr($n){
	$arr = array_merge(range('a', 'z'),range('A', 'Z'),range(0,9));

	shuffle($arr);

	$keys = array_rand($arr,$n);
	$str = '';
	foreach ($keys as $key => $value) {
		$str .=$arr[$value];
	}
	return $str;

}
