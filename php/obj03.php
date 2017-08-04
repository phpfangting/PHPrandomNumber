<?php 

	class A{

		public static function who(){
			echo __CLASS__;
		}

		public static function info(){
			static::who();
		}
	}

	class B extends A{

		public static function test(){
			A::info();
			parent::info();
		}

		public static function who(){
			echo __CLASS__;
		}

		
	}

	B::test();
