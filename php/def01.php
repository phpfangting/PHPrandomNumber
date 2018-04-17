<?php 

	// define('Animals', ['dog','cat']);

	// print_r(Animals);
	
	abstract class I_phone{
		abstract public function say();
	}

	class Phone{

		public function getObj(I_phone $I_phone){
			return $I_phone;
		}
	}

	$p = new Phone();
	$aa = $p->getObj(new class extends I_phone{
			public function say(){
				echo __METHOD__;
			}
	});

	// print_r($aa);
	// $aa->say();
	// const d=10;
	// echo d;

	// $str = '你是我内心的一首歌';
	// echo json_encode($str,JSON_UNESCAPED_UNICODE);
echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 2), "s";  
echo $_SERVER["REQUEST_TIME_FLOAT"];
