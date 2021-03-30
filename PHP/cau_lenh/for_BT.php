<?php

	// vẽ tam giác đều
	
	for ($i=0; $i < 10; $i++) { 
		for ($j=10; $j > $i; $j--) { 
			echo "&ensp;";
		}
		for ($k=0; $k < $i; $k++) { 
			echo "&ensp;*";
		}
		echo "<br>";
	}

	// vẽ tam giác đều ngược
/*
	for ($i=0; $i < 10; $i++) { 
		for ($j=0; $j < $i; $j++) { 
			echo "&ensp;";
		}
		for ($k=10; $k > $i ; $k--) { 
			echo "*";
		}
		for ($l=$k+1; $l < 10 ; $l++) { 
			echo "*";
		}
		echo "<br>";
	}
*/

/*  vẽ tam giác 1 tới 10
	for ($i=0; $i < 10; $i++) {

		for ($j=1; $j < $i; $j++) { 
			echo $j;
		}
		echo "<br>";
	}
	*/

	/* vẽ hình tam giác *

	for ($i=0; $i < 10; $i++) { 
		for ($j=0; $j < $i; $j++) { 
			echo "*";
		}
		echo "<br>";
	}

	*/

	// vẽ tam giác ngược
	/*
	 for ($i=0; $i < 10; $i++) {
		 for($j = 10; $j > $i; $j--){
		 	echo $j;
			 }
	 	echo "<br>";
	 }
	 */

	 // vẽ tam giác bên phải
	 /*
	 for ($i=0; $i < 10; $i++) { 
	 	for ($j=$i; $j < 10; $j++) { 
	 		echo "&ensp;";
	 	}
	 	for ($k=0; $k < $i; $k++) { 
	 		echo "*";
	 	}
	 	echo "<br>";
	 }
	 */


	 // vẽ tam giác đều
	 /*
	for ($i=0; $i < 5; $i++) { 
		for ($j=5; $j > $i ; $j--) { 
			echo "&emsp;&ensp;";
		}
		for ($k=0; $k < $j; $k++) { 
			echo "*&emsp;&emsp;";
		}
		echo "<br>";
	}

	*/

	// vẽ tam giác vuông ngược
/*
	for ($i=0; $i <= 10; $i++) { 
		for ($j=10; $j > $i ; $j--) { 
			echo "*";
		}
		echo "<br>";
	}

*/

   


 ?>