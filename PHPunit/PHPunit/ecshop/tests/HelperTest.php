<?php

/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/21
 * Time: 10:28
 */
use app\Common\Helper;
use app\Common\Upload;
use PHPUnit\Framework\TestCase;


class HelperTest extends TestCase
{
    /**
     * @dataProvider randStringProvider
     */
    public function testRandString($n=6)
    {
        $str = Helper::randString($n);
        echo "\n";
        echo $str;
        echo "\n";
        $this->assertTrue(strlen($str) == $n && !empty($str));
    }

    /**
     *给randString 提供测试参数
     * @return array
     */
    public function randStringProvider()
    {
        return [
            [2],
            [1],
        ];
    }

}