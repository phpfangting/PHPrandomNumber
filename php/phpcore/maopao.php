<?php


$arr = [1,2,3,43,2,908,0,-10];
//控制轮数
for($i=0,$len=count($arr);$i<$len;$i++){
	//比较的次数
	for($j=0;$j<$len-$i-1;$j++){
		if($arr[$j]>$arr[$j+1]){
			list($arr[$j],$arr[$j+1]) = [$arr[$j+1],$arr[$j]];
		}
	}
	print_r($arr);

}

