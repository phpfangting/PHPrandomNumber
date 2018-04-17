<?php  



$img = '<img src="a.png" /> <img src="b.jpg" />';

$pattern='/(?<=src=)\"\w+\.(jpg|png)\"/';
preg_match_all($pattern,$img, $data);
print_r($data);
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  foreach($data[0] as $k):?>
	<img src="<?=trim($k,'"')?>">
<?php endforeach; ?>
</body>
</html>