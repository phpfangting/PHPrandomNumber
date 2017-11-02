<?php
 
$rst = array('error' => 1,'errnor' => 0);
 
$username = 'abc';
$password = '123';
if ($username == 'abc' && $password == '123') {
    $rst['error'] = 0;
    $data = array('client_id' => 'a81c50f813d44781b74c7d2fe473f7a9',
                    'grant_type' => 'password',
                    'client_secret' => '8117c0592e214021884a6051d26158bf',
                    'scope' => 'test1_scope',
                    'provision_key' => 'provision-key-for-node1-oauth2',
                    'authenticated_userid' => '233',
                    'username' => 'abc',
                    'password' => '123',
 );
    $url = 'https://kong.epailive.com/oauth2/token';
    $msg = httpsRequest($url, $data);
 
    $rst['msg'] = $msg;
} else {
    $rst['msg'] = 'Auth failed.';
}
$result = json_encode($rst);
echo $result;
 
function httpsRequest($url, $data = null)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    } else {
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $output = curl_exec($curl);
    curl_close($curl);
 
    return $output;
}