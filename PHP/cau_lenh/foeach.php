<?php 
	// Danh sách mã số sinh viên và sinh viên tương ứng
/*
$sinhvien = array(
    'SV001' => 'Nguyễn Văn A',
    'SV002' => 'Nguyễn Văn B',
    'SV003' => 'Nguyễn Văn C',
    'SV004' => 'Nguyễn Văn D',
    'SV005' => 'Nguyễn Văn E'
);
  
// Xuất ra danh sách sinh viên
foreach ($sinhvien as $chiso => $tensv){
    echo $chiso. $tensv . '<br/>';
}

*/
	$sinh_vien = array(
		array(
			'name' => 'name 1',
			'age' => 'age 1'
		),
		array(
			'name' => 'name 2',
			'age' => 'age 2'
		)

	);

	foreach ($sinh_vien as $key => $value) {

		foreach ($value as $key2 => $value2) {
			echo $key2 .'=>'. $value2;
			echo "<br>";
		}
    }
	
 ?>