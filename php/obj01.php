<?php
namespace App\oo;
abstract class Animal{
	public $number=10;
	abstract public function say();
	public function show(){

	}

}

abstract class People extends Animal {

	static $count=100;

	public function __construct($name,$age,$weight){
		$this->name=$name;
		$this->age=$age;
		$this->weight=$weight;
	}

	public function show(){
		echo $this->name,',',$this->age,',',$this->weight,',';
	}

	public function say(){
		echo 'hello';
	}

	
}

class Student extends People implements I_goods,I_phone{

	public function __construct($name,$age,$weight,$height){

			$this->height=$height;
			parent::__construct($name,$age,$weight);
	}

	public function test(){
		echo 'test';
	}

	public function phone(){
		echo __METHOD__;
	}
	
}

interface I_goods{
	public function test();
}

interface I_phone{
	public function phone();
}

$stu = new Student('zhansgan',10,120,90);
// $stu->show();
// echo Student::$count;
// var_dump($people instanceof People);
// var_dump($stu instanceof People);
// $stu->show();
// $stu->test();
// $stu->phone();
$a= serialize($stu);
$b = unserialize($a);
$b->phone();
var_dump($b);