<?php
        
    $dsn = "mysql:host=localhost;dbname=rating"; 
    $username = "root";
    $password ="";
    
    try {
        $db = new PDO($dsn, $username, $password);
     } catch (PDOException $e) {
        $e->getMessage();
        echo 'Lỗi không kết nối được';
        exit();
}

?>