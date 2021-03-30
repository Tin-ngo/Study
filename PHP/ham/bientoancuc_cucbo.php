<?php 
	// Biến toàn cục
$bien_toan_cuc = 12;
  
function kiem_tra()
{
    // Biến cục bộ
    $bien_cuc_bo = 13;
  
    // Lấy biến toàn cục
    global $bien_toan_cuc;
  
    // Lấy số dư biến cục bộ chia cho biến toàn cục và
    // kiểm trả về true nếu số dư = 0, ngược lại trả về false
    if ($bien_cuc_bo % $bien_toan_cuc){
        return true."hello";
    }
    else{
        return false;
    }
}

echo kiem_tra();
 ?>