<?php 
	//tính tổng 0 -> 100 thường
function tong_100(){
	$tong = 0;
	for ($i=0; $i <= 100; $i++) { 
		$tong += $i;
	}
	return $tong;
}

	// tính tổng 0-> 100 Đệ Quy
	function tong_100_DeQuy($n){
		if ($n == 1) { return $n;	}            // điều kiện dừng
		else{
			return $n + tong_100_DeQuy($n - 1);
		}
	}
   

    echo "<br>Hàm tính tổng bình thường<br>";
	echo tong_100();

	echo "<br><br>Hàm tính tổng dùng đệ quy<br>";
	echo tong_100_DeQuy(100);

 ?>