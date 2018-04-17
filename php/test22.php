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

function getTree($data, $pId)
{
$html = '';
$conunt=0;
foreach($data as $k => $v)
{	
 if($v['parent_id'] == $pId)
 { //父亲找到儿子
 	if($v['has_child']==0 && ($pId != 0)){
 		 $html .= "<li class='treeview'>".$v['menu_name'];
 	}elseif($v['has_child']==0 && (($pId ==0))){
 		 $html .= "<li class='treeview'>";
 		 $html .=  "<a href='javascript:void(0)' data-url='/main'><i class='fa fa-home'></i> <span>{$v['menu_name']}</span></a>";
 	}else{
 		$html .= "<li class='treeview'>";
 		$html .="<a href='#'><i class='fa fa-wrench'></i> <span>{$v['menu_name']}</span><span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span></a>";	
 	}
 	$conunt++;
 	$html .= getTree($data, $v['menu_id']);
 $html = $html."</li>";
 
 }
}
$class = $pId?'treeview-menu':'sidebar-menu';
return $html ? "<ul class= '{$class}'>".$html.'</ul>' : $html ;
}
function    test($id,$data){
	  $temp = [];
        while ($id > 0) {
            foreach ($data as $item) {
                if ($id == $item['menu_id']) {
                    $temp[] = $item;
                    $id = $item['parent_id'];
                }
            }
        }

        return array_reverse($temp);
}

$temp = test(4,$data);

print_r($temp);


