<?php 
	// Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
function Fibo($n)
{
    if ($n <= 2){
        return 1;
    }
    else {
        return (Fibo($n - 2) + Fibo($n - 1));
    }
}
  
// Truyền 100 vào để test
   echo Fibo(10);
 ?>