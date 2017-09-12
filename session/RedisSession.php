<?php

/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/29
 * Time: 18:25
 */
class RedisSession
{
    static $redis = '';
    static $sessionLifeTime = 0;

    public static function start($redis)
    {
        self::$redis = $redis;
        self::$sessionLifeTime = ini_get("session.gc_maxlifetime");
        ini_set('session.save_handler', 'user');
        session_set_save_handler(
            array(__CLASS__, 'open'),
            array(__CLASS__, 'close'),
            array(__CLASS__, 'read'),
            array(__CLASS__, 'write'),
            array(__CLASS__, 'destroy'),
            array(__CLASS__, 'gc')
        );
        session_start();
    }

    public static function open($path, $name)
    {
        return true;
    }

    public static function close()
    {

        return self::$redis->close();

    }

    public static function read($sessionId)
    {
        $data = self::$redis->get($sessionId);
        return !empty($data) ? $data : '';
    }

    public static function write($sessionId, $data)
    {
        if (self::$redis->set($sessionId, $data) === true) {
            self::$redis->expire($sessionId, self::$sessionLifeTime);
            return true;
        }
        return true;
    }

    public static function destroy($sessionId)
    {
        self::$redis->del($sessionId);
        return true;
    }

    public static function gc($maxlifetime)
    {
        return true;
    }

}


