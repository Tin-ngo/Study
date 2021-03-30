<?php
    $dsn = 'mysql:host=localhost;dbname=tintuc';
    $users = 'root';
    $password='';
    
    try {
        $pdo = new PDO($dsn, $users, $password);
    } catch (PDOException $e) {
        die('Lỗi kết nối với DATABASE'. $e->getMessage() );
    }
    
?>