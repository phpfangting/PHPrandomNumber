<?php
error_reporting(E_ALL);
require(__DIR__ . '/../' . "phpMQTT.php");

$content = !empty($_POST['content']) ? $_POST['content'] : '';
$TPL = <<<HTML
    <dev>{$content}</dev>
HTML;

$clientId = "hacker_" . md5(uniqid());//发送者
$host = 'mqtt.epailive.com';
$mqtt = new phpMQTT("ssl://{$host}", 8883, $clientId); //Change client name to something unique
if (!empty($_POST['content'])) {
    if ($mqtt->connect()) {
        echo '连接成功';
        $mqtt->publish("music", 'message: ' . $TPL . '<br>create_dt: ' . date("Y-m-d H:i:s"), 0);
    } else {
        die('连接失败');
    }
}
$mqtt->close();
?>
