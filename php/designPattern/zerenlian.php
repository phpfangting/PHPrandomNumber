<?php  


	class board{

		private $level = 1;
		private $top = 'admin';

		public  function   process($lev){

			if($this->level==$lev){
				echo '删帖';
			}else{
				(new $this->top)->process($lev);
			}

		}

	}

class admin{

	private $level = 2;
	private $top = 'police';

	public function process($lev){

		if($this->level==$lev){
				echo '封号';
			}else{
				(new $this->top)->process($lev);
			}
	}


}

class police{

	private $level = 3;
	private $top = '';

	public function process($lev){

		if($this->level==$lev){
				echo '抓起来';
			}elseif($this->top){
				(new $this->top)->process($lev);
			}
	}


}

$lev = rand(1, 3);
echo $lev;
$b = new board();
$b->process($lev);