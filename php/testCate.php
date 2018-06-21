<?php 


	$arr = [
		['id'=>1001,'name'=>'家电','pid'=>0],
		['id'=>1002,'name'=>'手机','pid'=>1001],
		['id'=>1003,'name'=>'洗衣机','pid'=>1001],
		['id'=>1004,'name'=>'鞋子','pid'=>0],
		['id'=>1005,'name'=>'运动鞋','pid'=>1004],
		['id'=>1006,'name'=>'家具','pid'=>0],
		['id'=>1007,'name'=>'桌子','pid'=>1006],
		['id'=>1008,'name'=>'椅子','pid'=>1006],

	];

	function  cate($arr,$pid,$deep=0){
			 $result = [];
			if(empty($arr)){
				return [];
			}

			foreach ($arr as $key => $val) {
				//查找子元素
				if($val['pid']==$pid){
						 $val['deep'] = $deep;
						 $result[$key] = $val;
						 $result=array_merge($result,cate($arr,$val['id'],$deep+1));
				}
			}

			return $result;
	}

	$rs = cate($arr,0,0);

	print_r($rs);