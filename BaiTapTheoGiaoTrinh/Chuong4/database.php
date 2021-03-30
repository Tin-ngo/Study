<?php
    //dsn – Domain Name System (tạm dịch: Hệ thống phân giải tên miền)
    //chỉ một hệ thống cho phép thiết lập tương ứng giữa địa chỉ IP và tên miền.
    $dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
    $username="root";
    $password = "";
    
    try {
        
    $db = new PDO($dsn, $username, $password);
    
    } catch (PDOException $e) {
        
    $database_error = $e->getMessage();
    include 'database_error.php';
    exit();
    
    }

?>

