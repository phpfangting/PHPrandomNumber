<?php


function  file_list($dir){

		$result = [];

		if(is_dir($dir)){
			$list_dir = scandir($dir);


			foreach ($list_dir as $key => $file) {
				if($file == '.' || $file == '..'){
					continue;
				}
				if(is_dir($dir.$file)){
					$result = array_merge($result,file_list($dir.$file.'/'));
				}else{
					$result[]=$dir.$file;
				}

			}
		}

		return $result;
}

$rs = file_list('./phpcore/');

print_r($rs);