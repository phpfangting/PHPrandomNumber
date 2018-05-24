<?php  

$file='http://www.test.com/php/a.jpg';
$img = new Imagick();
$img->readImage($file);
// $img->resizeImage(128, 128, 0, 0);
// $img->writeImage('images/foo.jpg');