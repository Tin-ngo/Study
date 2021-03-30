<?php 
	// truyền giá trị: không làm thay đổi giá trị của biến đầu tiên
	$a = 1;
	function tang_1($a){
		$a = $a+1;
		return $a;
	}
	echo tang_1($a);
    echo "<br>";
	echo $a;



	echo "<br>Truyền bằng tham chiếu ( có dấu & )<br>";
	// truyền tham chiếu: có dấu & trước biến được gọi vào sẽ làm thay đổi giá trị biến đầu tiên
	$b = 5;
	function tang_5_thamchieu(&$b){
		$b = $b + 5;
		return $b;
	}
	echo tang_5_thamchieu($b);
	echo "<br>";
	echo $b;

 ?>