<?php  

// function customError($errno, $errstr)
//  { 
//  echo "<b>Error:</b> [$errno] $errstr<br />";
//  echo "Ending Script";
//  die();
//  }


// set_error_handler('customError');

$arr = [

	['id'=>1,'type'=>1],
	['id'=>2,'type'=>1],
	['id'=>3,'type'=>1],
	['id'=>4,'type'=>1],
	['id'=>5,'type'=>1],
	['id'=>6,'type'=>2],
	['id'=>7,'type'=>3],

];


$data = array_column($arr,null,'type');

$a = 50;

echo is_double($a);