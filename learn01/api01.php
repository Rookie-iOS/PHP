<?php
	
	class data {
		var $code;
		var $msg;
		var $data;
	}

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$name = $_GET['name'];
		$age = $_GET["age"];
		$a = array('name' => $name,'age'=>intval($age));
		test($a);
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$name = $_POST['name'];
		$age = $_POST["age"];
		$a = array('name' => $name,'age'=>intval($age));
		test($a);
	}

	function test($a){
		
		$data = new data;
		$data->code = 1000;
		$data->data = $a;
		$data->msg = "成功";
		echo json_encode($data);
	}
?>