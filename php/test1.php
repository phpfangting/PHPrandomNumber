<?php 
error_reporting(0);
function errorLog()
{
    ob_start();//开启ob缓存
    $error = error_get_last();//获取错误信息
    if (in_array($error['type'], array(E_ERROR, E_WARNING))) {
        $content = ob_get_contents() . json_encode($error) . PHP_EOL;//获取ob缓存中的内容
        file_put_contents('./error.log', $content, FILE_APPEND);
        ob_end_clean();
    }
}
 
//这个函数在脚本运行结束或出现错误时候，会回调注册的函数 errorLog
//当前errorLog函数体内，需要进行相应的判断：当出现错误时，才能记录日志，否则也就没多大的意义了。
// register_shutdown_function("errorLog");
// fopen('a.txt','rw');

$data = array (
  0 => 
  array (
    'browseTargetId' => '7783092',
    'channelSource' => 0,
    'browseType' => 8,
    'createTime' => '2016-11-05 14:48;42',
  ),
  1 => 
  array (
    'browseTargetId' => '7783093',
    'channelSource' => 0,
    'browseType' => 3,
    'createTime' => '2016-11-05 14:51;39',
  ),
  2 => 
  array (
    'browseTargetId' => '7783090',
    'channelSource' => 0,
    'browseType' => 3,
    'createTime' => '2016-11-05 14:51;58',
  ),
);

$data = array_filter($data,function ($v){
	return $v['browseType']==3;
});
$data = array_column($data,'browseTargetId');
echo '<pre>';
print_r($data);


