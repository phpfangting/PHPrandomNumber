<?php

class SessionFile
{
    static $sessSavePath = 'F:\sessionTmp';

    public static function start()
    {
        @unlink(self::$sessSavePath.'\a.txt');
        ini_set('session.save_path','F:\sessionTmp');
        ini_set('session.save_handler','user');
        ini_set('session.gc_probability',1);
        ini_set('session.gc_divisor',1);
        /*
         *  session.gc_probability
         *  session.gc_divisor
         */
        //php在在处理session的时候找到该函数指定的几个方法来处理
        session_set_save_handler(
            array(__CLASS__, 'open'),
            array(__CLASS__, 'close'),
            array(__CLASS__, 'read'),
            array(__CLASS__, 'write'),
            array(__CLASS__, 'destroy'),
            array(__CLASS__, 'gc')
        );
        register_shutdown_function(array(__CLASS__,'test'));
        session_start();
    }

    public static function open($path, $name)
    {
        file_put_contents(self::$sessSavePath.'\a.txt',__METHOD__.PHP_EOL,FILE_APPEND);
        self::$sessSavePath = !empty($path) ? $path : self::$sessSavePath;//打开session存储的路径
        if (!empty(self::$sessSavePath) && !file_exists(self::$sessSavePath)) {
            mkdir(self::$sessSavePath);
        }
        return true;
    }


    public static function close()
    {
        file_put_contents(self::$sessSavePath.'\a.txt',__METHOD__.PHP_EOL,FILE_APPEND);
        return true;
    }

    public static function read($id)
    {
        file_put_contents(self::$sessSavePath.'\a.txt',__METHOD__.PHP_EOL,FILE_APPEND);
        $sessFilePath = self::$sessSavePath . DIRECTORY_SEPARATOR . 'sess_' . $id;//定义session文件的路径
       
        if (file_exists($sessFilePath)) {
            return (string)file_get_contents($sessFilePath);
        }
        return '';
    }

    public static function write($id, $sessData)
    {
        //PHP 会在输出流写入完毕并且关闭之后 才调用 write 回调函数

        file_put_contents(self::$sessSavePath.'\a.txt',__METHOD__.PHP_EOL,FILE_APPEND);
        $sessFilePath = self::$sessSavePath . DIRECTORY_SEPARATOR . 'sess_' . $id;//定义session文件的路径
        if ($fp = fopen($sessFilePath, 'w')) {
            fwrite($fp, $sessData);
            fclose($fp);
            return true;
        }
        return true;
    }

    public static function destroy($id)
    {
        file_put_contents(self::$sessSavePath.'\a.txt',__METHOD__.PHP_EOL,FILE_APPEND);
        $sessFilePath = self::$sessSavePath . DIRECTORY_SEPARATOR . 'sess_' . $id;//定义session文件的路径
        if (!file_exists($sessFilePath)) return true;
        return unlink($sessFilePath);
    }

    public static function gc($maxfifetime)
    {

        foreach (glob(self::$sessSavePath . DIRECTORY_SEPARATOR . 'sess_*') as $fileName) {
            if (!file_exists($fileName)) continue;
            if (filemtime($fileName) + $maxfifetime < time()) {
                $flog = unlink($fileName);
                echo '删除成功';
                file_put_contents(self::$sessSavePath.'\a.txt','文件删除成功'.PHP_EOL,FILE_APPEND);
            }

        }
       
        return true;
    }

    public static function test(){

        file_put_contents(self::$sessSavePath.'\a.txt','程序执行完成之后执行test函数'.PHP_EOL,FILE_APPEND);
    }
}

