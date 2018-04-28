<?php

   $targetUrl = ['https://www.baidu.com/','http://php.net','https://segmentfault.com'];
    $url = $targetUrl[rand(0,2)];
   
    header("Location: {$url}",false,301);