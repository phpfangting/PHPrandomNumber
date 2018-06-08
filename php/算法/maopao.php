<?php 


	$arr = [21,56,78,34,56,34,86,345,65,4232,654,2];



	for($i=0,$len=count($arr);$i<$len;$i++){
		for ($j=0; $j < $len-$i-1 ; $j++) { 
			if($arr[$j]>$arr[$j+1]){
				list($arr[$j],$arr[$j+1]) = [$arr[$j+1],$arr[$j]];
				
			}
		}
	}

	print_r($arr);exit;



	