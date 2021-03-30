<?php 
	$b = '123'; // biến b có kiễ dữ liệu là String ( dữ liệu trong dấu ngoặc kép)
	$a = 123;   //biến a có kiểu dữ liệu là int
	$a_string = (String)$a;   // ép kiểu dữ liệu string với biến $a

	// kiểm tra kiểu dữ liệu String
	var_dump(is_string($a_string));

	 ?>