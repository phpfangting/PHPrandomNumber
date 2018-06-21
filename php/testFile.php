<?php  



	function  scandirMy($dir){

		$result = [];

		if(is_dir($dir)){

		   $dirList = scandir($dir);//扫描当前的目录

		   foreach ($dirList as $key => $file) {
		   		if(in_array($file,['.','..'])){
		   			continue;
		   		}
		   		if(is_dir($dir.$file)){
		   			$result = array_merge($result,scandirMy($dir.$file));
		   		}else{
		   			$result[] = $dir.$file;
		   		}
		   }
		}

		return $result;

	}


$rs = scandirMy('../');

print_r($rs);
    