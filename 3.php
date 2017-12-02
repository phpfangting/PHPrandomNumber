<?php


// 	//订阅  
// ini_set('default_socket_timeout', -1);  //不超时  
// $redis = new Redis();  
// $redis->connect('127.0.0.1', 6379);  
// $result=$redis->subscribe(array('中央广播电台'), 'callback');  
// function callback($instance,$channelName,$message){  
//     echo $message;  
// }  

// $str = 'http://www.epai_yearbook_admin.com/tests/';

// $data = parse_url($str);

// var_dump($data);

// $arr = ['company'=>[1001=>'a',2001=>'b']];
// $key = 3;
// $value ='A';
// // $arr['company'][$key]=$value;
// $arr['company']=[$key=>$value];

// $str = http_build_query($arr);


// $f = array_search(4, $arr['company']);
// $key = 4;
// $value ='5';
// // $arr['company'][$key]=$value;
// $arr['company']=[$key=>$value];
// $key = 6;
// $value ='B';
// // $arr['company'][$key]=$value;
// $arr['company']=[$key=>$value];
// print_r($arr);

 function buildUrl(&$query, $filed, $key, $value, $type, $isBatch = 0)
    {

        switch ($type) {
            case 0:
                //批量添加
                if (!empty($isBatch)) {
                	if(empty($query) || !array_search($value, $query[$filed])){
                		 $query[$filed][$key] = $value;
                	}
                   
                } else {
                    //单个添加
                    $query[$filed] = [$key => $value];
                }

                break;
            case 1:
                //减少参数

                unset($query[$filed][$key]);
                break;
        }
       

        return http_build_query($query);

    }

    $data = [
      'company'=>[],
      'time'=>[]
    ];
    $url =  http_build_query($data);


   

    echo $url;