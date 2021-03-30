<?php 
      // hàm kiểm tra chẵn lẻ
	function kiemtra_chan($so){
		if($so % 2 == 0){
			return true;
		}else{
			return false;
		}
	}
	//tính tổng 2 số
	function tinh_tong($a, $b){
		$tong = $a + $b;
		echo $a." + ".$b." = ".$tong;
	}

	// tính tổng 2 số, nếu có thêm số thứ 3 thì cộng thêm vô 
	function tinh_tong_($a, $b, $c=false){
		$tong = $a + $b;
		if ($c != false) {
			$tong = $a +$b + $c;
		}
		echo $a." + ".$b." = ".$tong;
	}



	$number = 9;
	if (kiemtra_chan($number)) {
		echo $number. " This is even number ( đây là số chẵn )";
	}else{
		echo $number. " this is odd number, not even number ( đây là số lẻ, không phải là số chẵn)";
	}

	echo "<br><br>hàm tính tổng<br> <br>";
	$so1 = 5;
	$so2 = 10;
	tinh_tong($so1, $so2);


	echo "<br><br>hàm tính tổng 3 số <br><br>";
	$so1 = 5;
	$so2 = 10;
	$so3 =15;
	tinh_tong_($so1, $so2, $so3);     // có hay không có $so3 đều được
 ?>