<?php

class DB{

	private static $instancs = null;

	private function __construct(){

	}


	private function __clone(){

	}

	public static function getInstancs(){
		if(self::$instancs != null){
			return  self::$instancs;
		}else{

			self::$instancs = new self;
		}

		return self::$instancs;


	}
}


$obj1 = DB::getInstancs();

var_dump($obj1);

$obj2 = DB::getInstancs();

var_dump($obj2);