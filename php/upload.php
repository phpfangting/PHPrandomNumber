<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/3
 * Time: 21:26
 */


$imgRecource = $_FILES['upload_file'];
if(!empty($imgRecource['tmp_name'])){
    $targetDir = __DIR__.'/'.'uploads/';
    if(!is_dir($targetDir)){
        mkdir($targetDir,0777);
    }
    $fileName = uniqid('epailive').time().'.jpg';
    $targetFileNamePath = $targetDir.$fileName;

    move_uploaded_file($imgRecource['tmp_name'],$targetFileNamePath);

    $str =<<<HTML
    
    <script type="text/javascript">
        window.parent.document.getElementById('headimg').setAttribute('src',"/php/uploads/{$fileName}");
    </script>
HTML;

    echo $str;
}





