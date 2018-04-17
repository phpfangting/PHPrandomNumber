<?php  


	$arr = [1,56,67,34,45,908,908];


	$burr = array_fill(0, max($arr)+1, 0);


	

		for($j=0;$j<count($arr);$j++){

			for($i=0,$len=count($burr);$i<$len;++$i){
					if($arr[$j]==$i){
						++$burr[$i];
					}
			}

		}

	   

	   $newArr = [];
	   for($i=0,$len=count($burr);$i<$len;++$i){
			if($burr[$i]>0){
				for($j=0;$j<$burr[$i];$j++){
					$newArr[] = $i;

				}
				
			}

		}


print_r($newArr);
