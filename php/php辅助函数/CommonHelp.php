<?php

/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2016/4/25
 * Time: 11:04
 */
class CommonHelp
{
    /**
     * [获取时间差]
     * @param $time
     * @return string
     */
    public static function transformTime($time)
    {
        $rtime = date("m-d H:i", $time);
        $rtime2 = date("Y-m-d H:i", $time);
        $htime = date("H:i", $time);
        $time = time() - $time;
        switch (true) {
            case $time < 60:
                $str = $time . '秒前';
                break;
            case $time < 60 * 60:
                $min = floor($time / 60);
                $str = $min . '分钟前';
                break;
            case $time < 60 * 60 * 24:
                $h = floor($time / (60 * 60));
                $fen = $time - $h * 3600;
                $fen = ($fen > 60) ? floor($fen / 60) . '分钟' : '';
                $str = $h . '小时' . $fen . '前';
                break;
//            case $time < 60 * 60 * 24 * 3:
//                $d = floor($time / (60 * 60 * 24));
//                $str = ($d == 1) ? '昨天' : '前天';
//                break;
            case $time < 60 * 60 * 24 * 7:
                $d = floor($time / (60 * 60 * 24));
                $str = $d . '天前';
                break;
            case $time < 60 * 60 * 24 * 30:
                $str = $rtime;
                break;
            default:
                $str = $rtime2;
        }
        return $str;
    }


    /**
     * 上传图片
     * @param $imgs
     * @param string $dirs
     * @return mixed
     */
    public static function uploadImg($imgs, $dirs = "uploads")
    {
        $ds = DIRECTORY_SEPARATOR;
        $upload = new UploadFile(Yii::$app->params['imageUpload']);
        $img_str = '';
        $target_real_path = Yii::$app->params['basePath'] . $ds . $dirs . $ds;//存储上传的图片绝对路径
        switch (true) {
            case is_array($imgs):
                foreach ($imgs as $k => $img) {
                    $file_name = uniqid('epai') . time();
                    $upload_file_name = $target_real_path . $file_name . '.jpg';
                    $file = fopen($upload_file_name, 'wb');
                    fwrite($file, base64_decode($imgs)); //将图片写入到新创建的文件中
                    fclose($file); //写完关闭文件
                    //上传源图片
                    $result = $upload->uploadFile($upload_file_name);//上传主文件
                    //将源图片裁剪640X640并
//                    ImageHelp::compressImgByimagick($upload_file_name, '', 1, 1);
                    //将压缩的图片进行上传
//                    $result = $upload->uploadSlaveFile($upload_file_name, $result['path']);
                    if ($result) {
                        $img_str .= $result['path'] . ',';
                    }
                    @unlink($upload_file_name);
                }

                break;
            default:
                $file_name = uniqid('epai') . time();
                $upload_file_name = $target_real_path . $file_name . '.jpg';
                $file = fopen($upload_file_name, 'wb');
                fwrite($file, base64_decode($imgs)); //将图片写入到新创建的文件中
                fclose($file); //写完关闭文件
                //上传源图片
                $result = $upload->uploadFile($upload_file_name);//上传主文件
//                //将源图片裁剪640X640并
//                ImageHelp::compressImgByimagick($upload_file_name, '', 1, 1);
//                //将压缩的图片进行上传
//                $result = $upload->uploadSlaveFile($upload_file_name, $result['path']);
                @unlink($upload_file_name);

                if ($result) {
                    $img_str = $result['path'];
                }
                break;
        }

        return $img_str ? trim($img_str, ',') : '';
    }

    /**
     * 图片上传
     * @param string $dirs
     * @return string
     */
    public static function uploadForm($dirs = "uploads")
    {
        try {
            //定义图片路径
            $ds = DIRECTORY_SEPARATOR;
            $target_real_path = Yii::$app->params['basePath'] . $ds . $dirs . $ds;//存储上传的图片绝对路径
            $file_name = uniqid('epai') . time();//图片名称
            //接收客户端上传的图片信息
            $result = array('status' => 404, 'msg' => '', 'url' => '');
            $img_options = array('jpg', 'jpeg', 'gif', 'png', 'webp');

            $img_ext = !empty(@pathinfo($_FILES['img']['name'])['extension']) ? @pathinfo($_FILES['img']['name'])['extension'] : '';
            $upload_file_name = $target_real_path . $file_name . '.jpg';//上传的图片路径
            switch (true) {
                case empty($_FILES['img']['tmp_name']):
                    throw new Exception('请选择要上传的图片');
                    break;
                case !in_array($img_ext, $img_options):
                    throw new Exception('请选择要上传jpg|jpeg|gif|png|webp等格式图片');
                    break;
                case $_FILES['img']['size'] > 3 * 1024 * 1024:
                    throw new Exception('请选择上传2M以下的图片');
                    break;
                case $_FILES['img']['error'] != 0:
                    throw new Exception('图片上传失败');
                    break;
                case !move_uploaded_file($_FILES['img']['tmp_name'], $upload_file_name):
                    throw new Exception('图片上传失败');
                    break;
            }


            $upload = new UploadFile(Yii::$app->params['imageUpload']);
            //将临时图片上传到图片服务器
            $file_info = $upload->uploadFile($upload_file_name);//上传主文件
            if (empty($file_info)) {
                throw new Exception('图片上传失败');
            }
            $host = DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'img?img_url=';
            //删除临时图片
            @unlink($upload_file_name);
            $result['status'] = 200;
            $result['msg'] = '上传成功';
            $result['url'] = $host . $file_info['path'];
        } catch (Exception $e) {
            $result['msg'] = $e->getMessage();
        }

        return $result;


    }

    /**
     * 定制锁
     * @param $user_id
     * @return bool
     */
    public static function redisLock($method, $user_id, $expire_time = 1)
    {
        $write_lock_id = 'lock:' . 'uid:' . $user_id . ':' . str_replace('::', ':', substr($method, strrpos($method, '\\') + 1));
        $redis_model = RedisDB::Yii()->redis;
        if ($redis_model->ttl($write_lock_id) > 0) {
            return true;//有锁
        }
        $redis_model->set($write_lock_id, '1');
        $redis_model->expire($write_lock_id, $expire_time);
        return false;//无锁

    }

    /**获取某段时间的范围
     * @param $start_date
     * @param $end_date
     * @return array
     */
    public static function getDateRange($start_date, $end_date)
    {
        $date_array = array();
        for ($i = 0; ; $i++) {
            $date_array[$i] = date('Y-m-d', strtotime($start_date) + $i * 24 * 60 * 60);
            if (strtotime($date_array[$i]) >= strtotime($end_date)) break;
        }

        return $date_array;
    }

    /**
     * 返回输入数组中某个单一列的值
     * @param $searchArr [必须! 规定要使用的多维数组]
     * @param string $searchField [必须! 需要返回值的列]
     * @param string $indexKey [可选 用作返回数组的索引/键的列]
     * @param array $result [不需要!存储返回值的列] 注意:不必给参数
     * @param array $result2 [不需要!存储返回数组的索引] 注意:不必给参数
     * @return array [返回键值对结果]
     */
    public static function arrColumn($searchArr, $searchField = '', $indexKey = '', & $result = [], & $result2 = [])
    {

        if (empty($searchArr) || empty($searchField)) {
            return $result;
        }

        foreach ($searchArr as $key => $val) {
            if (is_array($val)) {
                self::arrColumn($val, $searchField, $indexKey, $result, $result2);
            } else {
                if ($key == $searchField) {
                    $result[] = $val;
                }
                if ($key == $indexKey) {
                    $result2[] = $val;
                }
            }
        }
        return empty($indexKey) ? $result : array_combine($result2, $result);//用一个数组的值作为其键名，另一个数组的值作为其值

    }

    /**
     * 数组筛选
     * @param array $haystack = [] 需筛选的数组
     * @param array $retain = [] 需保留的字段
     * @return array
     * @author LianDa
     * @remark 从数组中筛选出需要保留的字段并组成新的数组返回
     */
    public static function filterArr($haystack = [], $retain = [])
    {
        // 验证参数
        if (empty($haystack) || empty($retain)) {
            return $haystack;
        }

        // 开始筛选
        $result = [];
        foreach ($haystack as $key => $val) {
            // 如键是数组，则递归
            if (is_array($val)) {
                $result[$key] = self::filterArr($val, $retain);
            } else {
                // 是否在需保留的字段中
                if (in_array($key, $retain) || is_numeric($key)) {
                    $result[$key] = $val;
                }
            }
        }

        // 释放并返回
        unset($haystack);
        return $result;
    }

    /**
     * 把预定义的字符批量转化为HTML实体,支持多维数组
     * @param $param [要转义的参数]
     * @return array [返回转义后的数组]
     */
    public static function deepHtmlSpecilChars($param)
    {
        if (empty($param)) {
            return array();
        }
        return is_array($param) ? array_map([__CLASS__, 'deepHtmlSpecilChars'], $param) : htmlspecialchars($param);
    }

    /**
     * 过滤参数防XSS跨站脚本攻击和sql注入,支持多维数组
     * @param string $param [要过滤的参数]
     * @return array [返回过滤后的参数]
     */
    public static function deepFilter($param = '')
    {
        if (empty($param)) {
            return $param;
        }
        return is_array($param) ? array_map([__CLASS__, 'deepFilter'], $param) : strip_tags(addslashes($param));
    }


}