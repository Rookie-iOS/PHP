<?php

	// test
	$name = $_REQUEST['fname'];
	echo 'Html通过post提交过来的fname字段的值是:'.$name;
	
	$fname = $_POST['fname'];
	echo '<br/>';
	echo $fname;
	
?>