<?php 
	$a = null; // Khởi tạo biến $a và gán giá trị null
	$b = (int)$a; // Biến $b có giá trị là ( 0 )
	$c = (string)$a; // Biến $c có giá trị rỗng ( '' )
	$d = (bool)$a; // Biến $d có giá trị FALSE

	//  kiểm tra biến null
	var_dump(is_null($a));
?>