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

$rs = file_list('.');

print_r($rs);

// $str="eyJpdiI6IlRMTXpDVkxoUjB1M2ZcL2VaTjBKcnVnPT0iLCJ2YWx1ZSI6IitmVDdQanEwN3RkK01ORmxKZDhxVXB4WXZ0M3p4MEVUbmRkdEE0aFA2VXhVTGhuWFMwekd2cDdIQjBLaGQ4NTdPK3AxSTYzZVFlbkI0NmZNaEw0anN3PT0iLCJtYWMiOiI4NTc5ODhjNTUwMDRlMTEzZDgzMDgxM2UyMmQ4M2M5NGQxMWQwNmQ4NGE0ZTRmMzZiNWMzNTM5Mjc4NzFkYzU5In0%3D";


// echo base64_decode($str);
