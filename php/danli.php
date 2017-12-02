<?php 

class Student{

	public function say(){
		echo 'student';
	}

	public function __set($name,$val=''){
	 
		if(in_array($name,['name','age','weight'])){
			$this->$name=$val;
		}else{
			echo '该属性不予许被定义';
		}
	}

	public function __get($name){

		if(in_array($name,['name','age','weight'])){
			if(isset($this->$name)){
				return $this->$name;
			}
		}else{
			return 'deny';
		}
	}

}

$stu = new Student();
// $stu->say();
$stu2 = clone $stu;
// var_dump($stu2);

unset($stu2);
$a = 10;
$b = 20;
$c = 30;
$a = &$b;
$a =40;
echo $b;
unset($a);
$a=get_defined_constants();
// var_dump($a);


// echo ord('A');

