<?php 
 


 class Framework{

 	
 	public static function app(){

 		self::init();
 	}

 	public static function init(){

 		spl_autoload_register([__class__,'autoload']);
 	}

 	public static function autoload($fileName){
 		echo $fileName;exit;
 	
 		 require_once $fileName . '.php';

 	}

 	


 }

 class  Student{

 	public function say(){
 		echo 'hello';
 	}
 }


 Framework::app();


$obj  = new Student();






