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


//测试
echo uuid();//8384AD12CBAF76362CA60F820153184A
/*
生成唯一的随机数

特点:唯一、不重复、长度固定。
*/

/**
 * @param $total [你要发的红包总额]
 * @param int $num [发几个]
 * @return array[生成红包金额]
 */
function getRedGift($total, $num = 10)
{
    $min = 0.01;
    $wamp = array();
    $returnData = array();
    for ($i = 1; $i < $num; ++$i) {
        $safe_total = ($total - ($num - $i) * $min) / ($num - $i); //红包金额的最大值
        if ($safe_total < 0) break;
        $money = @mt_rand($min * 100, $safe_total * 100) / 100;//随机产生一个红包金额
        $total = $total - $money;//剩余红包总额
        $wamp[$i] = round($money, 2);//保留两位有效数字
    }
    $wamp[$i] = round($total, 2);
    $returnData['MoneySum'] = $wamp;
    $returnData['newTotal'] = array_sum($wamp);
    return $returnData;
}


//测试
$data = getRedGift(100, 10);
print_r($data);
//result:
/*
 Array
(
    [MoneySum] => Array
        (
            [1] => 3.82
            [2] => 10.37
            [3] => 4.19
            [4] => 0.47
            [5] => 2.81
            [6] => 2.32
            [7] => 3.25
            [8] => 29.67
            [9] => 42.96
            [10] => 0.14
        )

    [newTotal] => 100
)
*/

