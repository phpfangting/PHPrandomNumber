<?php
error_reporting(E_ALL);
require(__DIR__ . '/../' . "phpMQTT.php");
$host='mqtt.epailive.com';

$message = [
    '练达回家偷菜了',
    '明磊回家吃饭了',
    '永刚回家抱娃了',
    '代码都写完了吗',
    '我的心好累',
    '嘉宾熊大幅度发多少',
    '今天我进城',
    '看到一个人',
    '满脸的码子吓呀吓死人',
    '花谢花开',
    '春去秋来',
    '啦啦啦我是卖报的小画家',
    '不是不知道,只是吓一跳',
    '风带着他走过最长的旅途',
    '一路跟着远方再没有停下',
    '拥着温暖,也闻过夜里的花',

];
$TPL=<<<HTML
    <dev>{$_POST['content']}</dev>
HTML;
$clientId = "hacker_".md5(uniqid());

$mqtt = new phpMQTT("ssl://{$host}", 8883, $clientId); //Change client name to something unique
if (!empty($_POST['content'])) {
    if ($mqtt->connect()) {
        echo '连接成功';
        $mqtt->publish("music", 'message: ' . $TPL . '<br>create_dt: ' . date("Y-m-d H:i:s"), 0);
    }else{
        die('连接失败');
    }

} else {

    foreach ($message as $item) {

        if ($mqtt->connect()) {
            echo '连接成功';
            $mqtt->publish("music", 'message: ' . $item . '<br>create_dt: ' . date("Y-m-d H:i:s"), 0);
        }else{
            echo '连接失败';
        }

    }
}
$mqtt->close();


?>
