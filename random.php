<?php

/**
 * 生成唯一的随机数
 * @return mixed|string
 */
function uuid()
{
    if (function_exists('com_create_guid')) {
        $uuid = str_replace('-', '', substr(com_create_guid(), 1, -1));
        return $uuid;
    } else {
        $uuid = strtoupper(md5(uniqid(rand(), true)));
        return $uuid;
    }
}