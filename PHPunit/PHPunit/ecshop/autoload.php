<?php

/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/21
 * Time: 14:35
 */
spl_autoload_register(function ($className) {
    $filePath = realpath('.') . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($filePath)) require_once $filePath;
    
});