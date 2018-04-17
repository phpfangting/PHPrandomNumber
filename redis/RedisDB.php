<?php

namespace App\Models\Redis;


/**
 * redis模型类
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2016/6/16
 * Time: 9:24
 */
use Redis;


/**
 * 定义redis模型类
 * Class RedisDB
 */
class RedisDB
{
    private static $instance = null;
    public $redis = null;//redis操作类

    private function __construct()
    {

        $this->redis = new Redis();
        $this->redis->connect(config("database.redis.default.host"), config("database.redis.default.port"));
        $this->redis->select(config("database.redis.default.database"));
    }

    //禁止用户克隆
    private function __clone()
    {
    }

    //访问唯一接口
    public static function laravel()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}