<?php 
	$mang = array(5,7,3);
	$soluong_arr = count($mang);
	for ($i=0; $i < ($soluong_arr - 1); $i++) { 
		for ($j=$i+1; $j < $soluong_arr; $j++) { 
			if ($mang[$i] > $mang[$j]) {
				$tmp = $mang[$j];
				$mang[$j] = $mang[$i];
				$mang[$i] = $tmp;
			}
		}
	}

	for ($k=0; $k < $soluong_arr; $k++) { 
		echo $mang[$k].'<br>';
	}
 ?>