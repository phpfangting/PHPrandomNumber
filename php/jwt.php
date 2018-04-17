<?php


function jwt($header,$payload,$secret_key,$secret_base64_encode=false){
// base64 encodes the header json
$encoded_header = base64_encode(json_encode($header));
// base64 encodes the payload json
$encoded_payload = base64_encode(json_encode($payload));
// base64 strings are concatenated to one that looks like this
$header_payload = $encoded_header . '.' . $encoded_payload;
//Setting the secret key
if($secret_base64_encode) $secret_key = $secret_key = base64_encode($secret_key);
// Creating the signature, a hash with the s256 algorithm and the secret key. The signature is also base64 encoded.
$signature = base64_encode(hash_hmac('sha256', $header_payload, $secret_key,true));
// Creating the JWT token by concatenating the signature with the header and payload, that looks like this:
 return  $header_payload . '.' . $signature;
}

$header = ['alg'=>'HS256','typ'=>'JWT'];
$payload = ['iss'=>'dpbkNJY089bdeJk6PxAofj6ti19rsTRZ'];
$secret_key = 'xVX7ousYSEU7447L42bELx6Wd3ydjdjC';
$jwt =  jwt($header,$payload,$secret_key);


// echo $jwt_token;


