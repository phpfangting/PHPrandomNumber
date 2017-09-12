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
$_SESSION['name']='冲胖';
unset($_SESSION['name']);
session_commit();
