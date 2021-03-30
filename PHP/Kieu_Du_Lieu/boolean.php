<?php 
	// có 2 giá trị là false hoặc true
	$is_admin = false; // biến $admin là kiểu boolean có gái trị là false

	//ép kiểu 
	$bool = 1; // biến $bool là kiểu int
	$bool = (bool)$bool; // lúc này biến $bool sẽ có kiểu boolean
	// Hoặc
	$bool = (boolean)$bool; // lúc này biến $bool sẽ có kiểu boolean


	//Các ký tự 0, ký tự trống và null đều được quy về giá trị FALSE, các ký tự còn lại quy về TRUE.

	$a = 123; // TRUE
	$b = 0; // FALSE
	$c = '0'; // FALSE
	$d = 'a123b' // TRUE
	$e = null; // FALSE
	$f = ''; // FALSE

	var_dump(is_bool($a));


	//để kiểm tra biến boolean giống như kiểm tra biến Int    is_bool()
 ?>