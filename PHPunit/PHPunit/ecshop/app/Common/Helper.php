<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/21
 * Time: 11:50
 */

namespace app\Common;


class Helper
{
    /**
     * 生成随机的字符串
     * @param int $n
     * @return string
     */
    public static function randString($n = 6)
    {
        if ($n > 62 || $n <= 0) return false;
        $arr = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
        shuffle($arr);
        $keys = array_rand($arr, $n);
        $str = '';
        if (is_array($keys) && !empty($keys)) {
            foreach ($keys as $key) {
                $str .= $arr[$key];
            }
        } else {
            $str = $arr[$keys];
        }
        return $str;
    }
}