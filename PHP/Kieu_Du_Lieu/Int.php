<?php 
//khai báo số nguyên không cần dấu ngoặc 
	$songuyen_duong = 12;
	echo "Số nguyên dương ".$songuyen_duong;
	echo "<br>";

	$songuyen_am = -15;
	echo "Số nguyên âm ".$songuyen_am;
	echo "<br>";

	$so_batphan = 0123;
	echo "SỐ bát phân ".$so_batphan;
	echo "<br>";

	$so_Thaplucphan = 0x1A;
	echo "Số thập luc phân ".$so_Thaplucphan;
	echo "<br>";
	echo "<br>";
	echo "<br>";

	//ép kiểu int
	echo "Ép kiểu Int";
	echo "<br>";

	$chuoi_so = '15';
	$so_nguyen = (int)$chuoi_so;
	echo "Chuỗi số ".$chuoi_so;
	echo "<br>";
	echo "Sau khi ép kiểu Int ".$so_nguyen;
	echo "<br>";
	var_dump(is_int($so_nguyen));
	echo "<br>";
	echo "<br>";

	//var_dump là hàm trả về dữ liệu gán trong hàm và kiểu dữ liệu và số ký tự của dữ liệu đó
	// vd   var_dump("hello world")   =>    string(12)hello world
	//is_int()  là hàm kiểm tra số nguyên hay không, và  sẽ trả về 1 => là số nguyên và ngược lại không có giá trị
 ?>