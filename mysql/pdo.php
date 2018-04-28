<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2018/4/24
 * Time: 13:39
 */

set_time_limit(-1);

$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=wocao;', 'root', '123456');

$sql = '';
for($i=0;$i<10000;++$i){
    $sql .= "(concat('zhangsan',floor(rand()*1000000)),'2'),";
}

$sql = trim($sql,',').';';

$rs = $pdo->query("insert into users(name,sex) values {$sql}");


