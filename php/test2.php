<?php  

  function uuid()
{
    if (function_exists('com_create_guid')) {
        $uuid = str_replace('-', '', substr(com_create_guid(), 1, -1));
        return $uuid;
    } else {
        $uuid = md5(uniqid(rand(), true));
        return $uuid;
    }
}

$str = "<<script>alert(document.cookie);//<</script>";
$str = "adsadsa";
echo strip_tags($str) ;