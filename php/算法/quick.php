<?php  



    function   quickSort($arr){
    		$len = count($arr);	
    		if($len <=1){
    			return $arr;
    		}

    		$baseNum = $arr[0];
    		$left = [];
    		$right = [];
    	
    		for($i=1;$i<$len;++$i){
    			if($baseNum>$arr[$i]){
    				$left[] = $arr[$i];
    			}else{
    				$right[] = $arr[$i];
    			}
    		}

    		$leftList = quickSort($left);
    		$rightList = quickSort($right);
    		$result = array_merge($leftList,[$baseNum],$rightList);
    		return $result;
    }



    // $arr = [1,23,46,4,3,75,4365,57,36,573,573,567];

    // $rs = quickSort($arr);

    // print_r($rs);

echo time();