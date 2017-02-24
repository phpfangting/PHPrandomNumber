<?php  

//   function uuid()
// {
//     if (function_exists('com_create_guid')) {
//         $uuid = str_replace('-', '', substr(com_create_guid(), 1, -1));
//         return $uuid;
//     } else {
//         $uuid = md5(uniqid(rand(), true));
//         return $uuid;
//     }
// }

// // $str = "<<script>alert(document.cookie);//<</script>";
// // $str = "adsadsa";
// // echo strip_tags($str) ;

//  function randStr($num=6){
//  	  $rangeData = array_merge(range('0','9'),range('a', 'z'),range('A', 'Z'));
//       shuffle($rangeData);
//       return  implode('',array_slice($rangeData, 0,$num));
//  }
 
// session_start();
// $_SESSION['login']='ok';

$a='';
$b=[1,2,3,4,5];

print_r($a+$b);