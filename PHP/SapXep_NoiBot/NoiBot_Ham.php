<?php 
	$mang = array(3,5,7,1,9,0,2,6,4,10);
	$dem = count($mang);

	function NoiBot_Tangdan(){
		global $dem;
		global $mang;
		for ($i=0; $i < $dem - 1; $i++) { 
			for ($j=$i+1; $j < $dem; $j++) { 
				if ($mang[$i] > $mang[$j]) {
					$tmp = $mang[$j];
					$mang[$j] = $mang[$i];
					$mang[$i] = $tmp;
				}
			}
		}
		Show_mang();
	}
	function NoiBot_Giamdan(){
		global $dem;
		global $mang;
		for ($i=0; $i < $dem - 1; $i++) { 
			for ($j=$i+1; $j < $dem; $j++) { 
				if ($mang[$i] < $mang[$j]) {
					$tmp = $mang[$j];
					$mang[$j] = $mang[$i];
					$mang[$i] = $tmp;
				}
			}
		}
		Show_mang();
	}

	function Show_mang(){
		global $dem;
		global $mang;
		for ($k=0; $k < $dem; $k++) { 
			echo $mang[$k]."<br>";
		}
	}
	echo "<br>Giảm dần<br>";
	NoiBot_Giamdan();
	echo "<br>Tăng dần<br>";
	NoiBot_Tangdan();


 ?>