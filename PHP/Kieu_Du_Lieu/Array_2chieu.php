<?php 
	$a = array();
	$a[0][1] = 123;             // 0 là dòng(các số xếp dọc trong ô vuông)
	$a[0][2] = 321;            // 2 là cột (các số xếp ngang trong ô vuông)

	echo $a[0][1]; // in ra giá trị 123
	echo "<br>";
	echo $a[0][2]; // in ra giá trị 321

	echo "<br>";
	// kiểm tra biến kiểu mảng

	var_dump(is_array($a));
?>