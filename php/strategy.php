<?php 

	/*

		100  500W
		90   300W
		80	 100W	



	*/
	 interface win{

			public function showWin();
	}

	class Score_100 implements win{


		public function showWin(){
			echo '获取五百万';
		}
	}

	class  Score_90 implements win{

		public function showWin(){
			echo '获取三百万';
		}
	}

	class  Score_80 implements win{

		public function showWin(){
			echo '获取一百万';
		}
	}


	class Money{

		private $obj = null; 

		public static  function getResult($Score){
			try{
				$obj = new ReflectionClass($Score);
				$ScoreObj = $obj->newInstance();
				$ScoreObj->showWin();
			}catch(ReflectionException $e){
				echo $e->getMessage();
			}
		}

	}
	
$scores = [10,90,80];
shuffle($scores);
$key = array_rand($scores);
Money::getResult("Score_{$scores[$key]}");