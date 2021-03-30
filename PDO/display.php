<?php
    
    include 'connect.php';
    
    $sql = "SELECT * FROM nguoidung";
    
    if($result = $pdo->query($sql)){
        while($row = $result->fetch()){
            var_dump($row[0],$row[1],$row[2]);    // hiện ra dữ liệu của cột thứ 0,1,2;
            echo '<br>';
        }
    }else{
        print_r($pdo->errorInfo());
    }
    
?>
