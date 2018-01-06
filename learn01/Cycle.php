<?php
	
	// 循环
	$n = 5;
	while($n--) {
		echo "世界，你好！！！".'<br/>';
	}
	
	echo '=====我是分割线=======<br/>';
	
	$num = 2;
	do{
		echo "write code, change world!!!".'<br/>';
	}while($num--);
	
	echo "========= 我也是分割线 ======== <br/>";
	for($i = 0; $i < 5; $i ++) {
		echo "明天会下雨么????<br/>";
	}
	
	echo "========= 我还是分割线 ======== <br/>";
	// foreach 遍历数组
	$data = array("张三","王五","赵六");
	foreach($data as $v) {
		echo $v.'<br/>';
	}
?>