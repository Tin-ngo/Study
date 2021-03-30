<?php 
	function bien_tinh(){
		// khai báo biến tĩnh
		static $a = 0;
		$a++;
		echo $a;
	}

	bien_tinh();   //1
	bien_tinh();    //2

	// mỗi lần làm xong thì giá trị của biến tĩnh được lưu trong vùng nhớ nên biến sẽ lưu giá trị gần nhất
 ?>