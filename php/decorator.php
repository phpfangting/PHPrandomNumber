<?php  


		
interface  decorator{

		public function beforeDraw();

		public function afterDraw();
}

class  People implements decorator{

	private $decorators = [];

	public function addDecorator($decoratorObj){

			$this->decorators[] = $decoratorObj;
	}


	public function beforeDraw(){
			foreach ($this->decorators as $key => $decoratorObj) {
				$decoratorObj->beforeDraw();
			}
	}

	public function afterDraw(){
			foreach ($this->decorators as $key => $decoratorObj) {
				$decoratorObj->afterDraw();
			}
	}

	public function  draw(){
		$this->beforeDraw();
		echo "-----\n";
		$this->afterDraw();
	}
}


class Police implements decorator{

	public function beforeDraw(){
		echo "穿上警服\n";
	}

	public function afterDraw(){
		echo "穿上防弹衣\n";
	}
}

class Student implements decorator{

	public function beforeDraw(){
		echo "穿上校服\n";
	}

	public function afterDraw(){
		echo "带上校徽\n";
	}
}


$peo = new People();
$peo->addDecorator(new Police());
$peo->addDecorator(new Student());
$peo->draw();
