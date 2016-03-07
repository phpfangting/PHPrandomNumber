<?php
/**
 * Created by PhpStorm.
 * User: liuft
 * Date: 2016/3/7
 * Time: 14:12
 */
//第一步，生成100000条数据
// for($i=0;$i<100000;++$i){
// 	$data[] = rand(1,10000);
// }
//第二步，写入到某个文件
// file_put_contents('data.php', '<?php  return '.var_export($data,true).';');
// 
//引入生成的数据

$data = require('./data.php');
$data = array_flip(array_flip($data));//0.1s-0.2s
//$data = array_unique($data);//0.5-0.6s
//
//总结:使用array_flip去重，它的效率是array_unique的3-4倍



