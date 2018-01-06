<?php
	
	$cars = array("bmw","benci","kaidilake","dazong");
	print_r($cars);
	
	echo '<br/>';
	$a = sort($cars);
	print_r($cars);
	echo '<br/>';
	
	rsort($cars);
	print_r ($cars);
	echo '<br/>';
	echo $cars[0];
	echo "<br/>";
	
	$people = array('张三' => 19, "李四" => 25, "王五" => 12, "赵六" => 70);
	asort($people);
	print_r($people);
	echo '<br/>';
	
	$human = array('aa' => 19, "cc" => 25, "dd" => 12, "bb" => 70);
	ksort($human);
	print_r($human);
	echo '<br/>';
	
	krsort($human);
	print_r($human);
	
	echo '<br/>';
?>