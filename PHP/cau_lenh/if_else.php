<?php 
	$so = 80; // Nhập vào số 80
if ($so % 2 == 0) // Nếu số dư khi chia cho 2 = o, tức là số chẵn ta sẽ chạy tiếp câu lệnh bên trong
{
    if ($so > 100){ // Nếu số lớn hơn 100 thì chạy lệnh bên trong
        echo 'Số chẵn và lớn hơn 100';
    }
    else if ($so < 100){ // Ngược lại nếu số nhỏ hơn 100 thì chạy lệnh bên trong
        echo 'Số chẵn và nhỏ hơn 100';
    }
}
 ?>