<?php
// 指明给谁推送，为空表示向所有在线用户推送
$to_uid = 789;
// 推送的url地址，使用自己的服务器地址
$push_api_url = "http://47.95.250.84:2121/";
$post_data = array(
   "type" => "publish",
   "content" => "你已经让我失望一次了".uniqid('me'),
   "to" => $to_uid, 
);
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
curl_setopt ($ch, CURLOPT_HTTPHEADER, array("Expect:"));
$return = curl_exec ( $ch );
curl_close ( $ch );
var_export($return);