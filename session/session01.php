<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/29
 * Time: 10:42
 */
ini_set("session.save_handler", "redis");
ini_set("session.save_path", "tcp://127.0.0.1:6379");
session_start();
$redis = new redis();
$redis->connect('127.0.0.1', 6379);

// redis 用 session_id 作为 key 并且是以 string 的形式存储
echo $redis->get('PHPREDIS_SESSION:' . session_id());
echo SID;