<?php
    include_once('../connect.php');
    
    $icon = $_FILES['icon']['name'];
    $icon_tmp = $_FILES['icon']['tmp_name'];
    move_uploaded_file($icon_tmp, '../image/'.$icon);
    
    $TenTL = filter_input(INPUT_POST, 'tentl');
    $ThuTu = filter_input(INPUT_POST, 'thutu');
    $AnHien = filter_input(INPUT_POST, 'anhien');
    
    $sql = "insert into theloai(TenTL,ThuTu,AnHien,icon)Value('$TenTL','$ThuTu','$AnHien','$icon')";
    
    if(mysqli_query($connect, $sql)){
        echo "<script> alert('Đã thêm thành công');";
        echo "location.href='theloai.php';</script>";
    }
    mysqli_close($connect);
?>