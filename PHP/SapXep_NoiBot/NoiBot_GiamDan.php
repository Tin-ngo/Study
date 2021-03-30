<?php 
	$mang = array(1,5,7,2,9,8,0,3);
	$sl = count($mang);
	for ($i=0; $i < ($sl - 1); $i++) { 
		for ($j=$i+1; $j < $sl; $j++) { 
			if ($mang[$i] < $mang[$j]) {
				$tmp = $mang[$j];
				$mang[$j] = $mang[$i];
				$mang[$i] = $tmp;
			}
		}
	}

	for ($k=0; $k < $sl; $k++) { 
		echo $mang[$k]."<br>";
	}
 ?>