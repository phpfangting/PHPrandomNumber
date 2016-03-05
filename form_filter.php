<?php


/**
 * 批量实体转义
 * @param $data
 * @return array|string
 */
function deepSpecialChars($data)
{
    if (empty($data)) {
        return $data;
    }

    return is_array($data) ? array_map("deepSpecialChars", $data) : htmlspecialchars($data);

}

/**
 *批量单引号转义
 * @param $data
 * @return array|string
 */
function deepSlashes($data)
{
    if (empty($data)) {
        return $data;
    }
    return is_array($data) ? array_map('deepSlashes', $data) : addslashes($data);
}


//调用案例


$arr = array('username' => '张三<div></div>', 'age' => "18'#", 'desc' => '<script>alert("hello")</script>');


$arr = deepSpecialChars($arr);//标签转义成实体
$arr = deepSlashes($arr);//单引号转义

print_r($arr);


//result
/*
Array
(
    [username] => 张三&lt;div&gt;&lt;/div&gt;
    [age] => 18\'#
    [desc] => &lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;
)
*/