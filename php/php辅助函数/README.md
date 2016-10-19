# 
PHP公共的辅助函数


CommonHelp.php   公共函数
    CommonHelp::transformTime(time());//参数给时间戳,文章发布几分钟前,几小时前,几天前可以用此函数
    CommonHelp::arrColumn($searchArr, $searchField，$indexKey);//获取数组中某列的值
    CommonHelp::filterArr($data,$fields);//返回指定字段的数组
    CommonHelp::deepHtmlSpecilChars($data);//过滤HTML标签
    CommonHelp::deepFilter($data);//字符串转义
    CommonHelp::onlyNo();//生成唯一单号

GetFileExtension.php 获取文件的后缀


