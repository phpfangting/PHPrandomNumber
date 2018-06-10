<?php


	interface subject{


		public function attach($type,$observerObj);
		public function destoryAttach($type);
		public function notify();
	}


	interface observer{


		public function update($sujectObj);	
	}


	class  User implements subject{

		private $observerObj = [];

		public function attach($type,$observerObj){

			$this->observerObj[$type] = $observerObj;
		}

		public function destoryAttach($type){

			unset($this->observerObj[$type]);
		}

		public function notify(){

			foreach ($this->observerObj as $key => $observer) {
				$observer->update($this);
			}
		}


		public function login(){

			$this->notify();
		}
	}


	class Logs implements observer{

		public function  update($sujectObj){
			echo "记录日志\n";
		}
	}

	class Email implements observer{

			public function update($sujectObj){

				echo "发送email\n";
			}
	}



	$user = new User();
	$user->attach('log',new Logs());
	$user->attach('email',new Email());
	$user->login();