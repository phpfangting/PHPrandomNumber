<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 16:03
 */
$json=file_get_contents('php://input', 'r');
echo $json;
exit;