<?php

/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2018/5/9
 * Time: 18:50
 */
class History
{
    /**
     * 用户未登录
     * 记录浏览记录到cookie
     * @return array
     */
    public static function saveBrowseHistoryRecordToCookie($historyTemp)
    {
        $expireTime = $_SERVER['REQUEST_TIME'];//当前时间
        $redisModel = RedisDB::laravel()->redis;
        //取出cookie中的值,如果没有就设置
        if (!empty($_COOKIE[self::HistoryRecord])) {
            $cookieValKey = (strlen($_COOKIE[self::HistoryRecord]) == 32) ? strip_tags(addslashes($_COOKIE[self::HistoryRecord])) : md5(uniqid(rand(), true));
        } else {
            $cookieValKey = md5(uniqid(rand(), true));//随机生成一个字符串(32位)
            setcookie(self::HistoryRecord, $cookieValKey, $expireTime + 3600 * 24 * 7, '/');//设置cookie
        }
        $historyData = $redisModel->get($cookieValKey) ? json_decode($redisModel->get($cookieValKey), true) : [];//取出历史记录,默认空数组
        $itemId = 0;//0 添加记录,否则不添加记录
        //判断历史记录是否已经添加
        if (!empty($historyData) && is_array($historyData)) {
            foreach ($historyData as $k => & $item) {
                if (($item['browseTargetId'] == $historyTemp['browseTargetId']) && ($historyTemp['browseType'] == $item['browseType'])) {
                    $item['createTime'] = $_SERVER['REQUEST_TIME'];//更新历史记录时间戳
                    $itemId = $historyTemp['browseTargetId'];//记录重复的id
                }
            }
        }
        //添加历史记录
        if ($itemId == 0) {
            $historyData[] = $historyTemp;
        }
        $redisModel->set($cookieValKey, json_encode($historyData));//记录浏览记录到redis
        //添加历史记录过期时间
        if ($redisModel->ttl($cookieValKey) <= 0) {
            $redisModel->expire($cookieValKey, 3600 * 24 * 7);//记录浏览记录的过期时间到redis
        }
        //搜集已经浏览记录中的Key,方便以后的维护
        $redisModel->zadd(config("redisKeyConfig.user_history_record_key"), [$cookieValKey => $expireTime]);
        return true;
    }

    /**
     * 用户未登录
     * 清楚历史记录
     * @return bool
     */
    public static function cleanHistoryRecord()
    {
        $redisModel = RedisDB::laravel()->redis;
        //取出cookie中的值,如果没有就设置
        if (!empty($_COOKIE[self::HistoryRecord])) {
            $cookieValKey = strlen($_COOKIE[self::HistoryRecord]) == 32 ? strip_tags(addslashes($_COOKIE[self::HistoryRecord])) : '';
            if (!empty($cookieValKey) && $redisModel->exists($cookieValKey)) {
                $redisModel->del($cookieValKey);
            }
        }
        return true;
    }

    /**
     * 用户未登录
     * 获取浏览记录
     * @return array
     */
    public static function getBrowseHistoryRecordByCookie()
    {
        $historyData = [];
        $redisModel = RedisDB::laravel()->redis;
        //取出历史记录
        if (!empty($_COOKIE[self::HistoryRecord]) && (strlen($_COOKIE[self::HistoryRecord]) == 32)) {
            $cookieValKey = strip_tags(addslashes($_COOKIE[self::HistoryRecord]));
            $historyData = $redisModel->get($cookieValKey) ? json_decode($redisModel->get($cookieValKey), true) : [];
        }
        return $historyData;
    }

    /**
     * 登录批量添加历史记录
     * @return array
     */
    public function dengaddBrowseRecord()
    {
        $memberId = $this->loginUserId();
        $historyData = self::getBrowseHistoryRecordByCookie();
        $rs = [];
        if (!empty($historyData) && count($historyData) > 0) {
            $historyData = Helpers::deepFilter($historyData);//过滤数据
            foreach ($historyData as & $item) {
                $item['memberId'] = $memberId;
                $item['createTime'] = date('Y-m-d H:i:s', $item['createTime']);
            }
            $browseLogs = json_encode($historyData);
            $interCan['browseLogs'] = str_replace('"', "'", $browseLogs);
            Curl::to(self::$host . self::AddBrowseLogListUrl)->withData($interCan)->post();
            setcookie(self::HistoryRecord, '', time() - 3600, '/');//清空cookie
            //清除历史浏览记录
            if (!empty($_COOKIE[self::HistoryRecord]) && (strlen($_COOKIE[self::HistoryRecord]) == 32)) {
                $cookieValKey = strip_tags(addslashes($_COOKIE[self::HistoryRecord]));//过滤cookie值
                $redisModel = RedisDB::laravel()->redis;
                $redisModel->del($cookieValKey);//删除key
                $redisModel->zrem(config("redisKeyConfig.user_history_record_key"), $cookieValKey);//删除成员key
            }
        }
        return $rs;
    }
}