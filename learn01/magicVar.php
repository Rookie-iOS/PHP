<?php
	
	echo __LINE__.'<br/>';
	echo __FILE__.'<br/>';
	echo __DIR__.'<br/>';
	
	function test(){
		echo __FUNCTION__.'<br/>';
	}
	test();
	
	class animation{
		
		function show(){
			echo __CLASS__.'<br/>';
		}
	};
	
	$a = new animation();
	$a->show();
	
	class Base{
		public function sayHello(){
			echo 'hello'.'<br/>';
		}
		
		function __destruct(){
			echo '类销毁了。。。。。。'.'<br/>';
		}
	}
	
	trait SayHello {
		public function sayHello(){
			parent::sayHello();
			echo 'World'.'<br/>';
		}
	}
	
	class MyHello extends Base{
		use SayHello;
	}
	$o = new MyHello;
	$o->sayHello();
	
	class Myclass {
		
		public $public = 'public';
		protected $protected = 'protected';
		private $private = 'private';
		function printHello(){
			echo $this -> public;
			echo $this->protected;
			echo $this->private;
		}
	}
	
	$obj = new Myclass;
	$obj->printHello();
	echo $obj->public;
	// echo $obj->protected;
	// echo $obj->private;
	
?>