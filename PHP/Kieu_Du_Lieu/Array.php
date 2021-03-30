<?php 
	//Khởi tạo một mảng gán vào biến $mang_a
	$mang_a = array();

	// VD : khai báo mảng sinhvien
	$sinhvien = array("NGuyễn văn a", "Nguyễn Văn B");
	echo $sinhvien[0];
	echo "<br>";
	echo count($sinhvien);   //  đếm có bao nhiêu phần tử trong mảng
	echo "<br>";
	print_r($sinhvien);

	//cách 2
	/*
	$sinhvien = array(
	0 => 'Nguyễn Văn A',
	1 => 'Nguyễn Văn B'
	);
	print_r($sinhvien);
	*/

	// Cách 3
	/*
	$sinhvien = array();
	$sinhvien[0] = 'Nguyễn Văn A';
	$sinhvien[1] = 'Nguyễn Văn B';
	print_r($sinhvien);
	*/

	// Cách 4
	/*
	$sinhvien = array();
	$sinhvien[] = 'Nguyễn văn A';
	$sinhvien[] = 'Nguyễn Văn B';
	print_r($sinhvien);
	*/


	//   MẢNG CHI MỤC
	// là số thứ tự của phần tử trong mảng   vd: phần tử bắt đầu của mảng có vị trí là 0


	// MẢNG KẾT HỢP
	//là mảng mà thay thế các mảng chỉ mục 0,1,... thành các thông tin khác
	// lưu ý: các phần tử trong mảng kết hợp không có thứ tự
	echo "<br>";
	echo "<br>";
	$sinhvien = array();
	$sinhvien['sinhvien_a'] = 'Nguyễn Văn A';
	$sinhvien['sinhvien_b'] = 'Nguyễn Văn B';
	print_r($sinhvien);

 ?>