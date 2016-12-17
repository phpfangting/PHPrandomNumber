<?php

$data = [

            ['menu_id'=>1,'menu_name'=>'主页','parent_id'=>0,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>2,'menu_name'=>'系统管理','parent_id'=>0,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>1],
            ['menu_id'=>3,'menu_name'=>'菜单管理','parent_id'=>2,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>4,'menu_name'=>'功能管理','parent_id'=>2,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>5,'menu_name'=>'角色管理','parent_id'=>2,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>6,'menu_name'=>'订单管理','parent_id'=>0,'order'=>0,'icon'=>'fa-futbol-o','has_child'=>1],
            ['menu_id'=>7,'menu_name'=>'购物车管理','parent_id'=>6,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>1],
            ['menu_id'=>8,'menu_name'=>'菜单三','parent_id'=>7,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>9,'menu_name'=>'菜单三','parent_id'=>7,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>10,'menu_name'=>'菜单三','parent_id'=>7,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
            ['menu_id'=>11,'menu_name'=>'菜单三','parent_id'=>7,'order'=>1,'icon'=>'fa-futbol-o','has_child'=>0],
        ];

function breads($arr,$id=0){
		$tree=array();
		while($id>0){
			foreach($arr as $v){
				if($v['menu_id']==$id){
					$tree[]=$v;
					$id=$v['parent_id'];
				}
			}
		}
		 return array_reverse($tree);
	}


      $data = breads($data,4);
      print_r($data);