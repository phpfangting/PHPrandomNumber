<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/30
 * Time: 11:09
 */
require_once './RedisSession.php';
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
RedisSession::start($redis);
session_commit();
print_r($_SESSION);
