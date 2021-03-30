<?php
    include_once '../connect.php';
    
    if(isset($_GET['idTL'])){
        $key = filter_input(INPUT_GET, 'idTL');
    }
    $sql = "delete from theloai where idTL=".$key;
    
    if(mysqli_query($connect, $sql)){
        echo "<script> alert('đã xóa thành công');";
        echo "location.href='theloai.php';</script>";
    }
    
    mysqli_close($connect);
    
?>