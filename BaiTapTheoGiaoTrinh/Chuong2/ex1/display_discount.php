<?php
      $motasanpham = filter_input(INPUT_POST, 'motasanpham');
      $giasanpham = filter_input(INPUT_POST, 'giasanpham');
      $phantramgiamgia = filter_input(INPUT_POST, 'phantramgiamgia');
      
      //tính toán
      $sotiengiam = $giasanpham * $phantramgiamgia * 0.01;
      $giadagiam = $giasanpham - $sotiengiam;

      // định dạng, format
      $giasanpham_f = "$". number_format($giasanpham,2);
      $phantramgiamgia_f = $phantramgiamgia . "%";
      $sotiengiam_f = "$". number_format($sotiengiam);
      $giadagiam_f = "$". number_format($giadagiam,2);
?>

<!DOCTYPE html>
<hmtl>
    <head>
    <meta charset="utf-8">
    <title>Tính giảm giá sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="main.scss">
    </head>
    
    <body>
        
        <main>
            <h1>Tính giảm giá sản phẩm</h1>
            
            <label>Mô tả sản phẩm: </label>
            <span><?php echo $motasanpham; ?></span>
            <br>
            
            <label>Giá sản phẩm: </label>
            <span><?php echo $giasanpham_f; ?></span>
             <br>
             
            <label>Phần trăm giảm giá: </label>
            <span><?php echo $phantramgiamgia_f; ?></span>
            <br>
             
            <label>Số tiền giảm: </label>
            <span><?php echo $sotiengiam_f; ?></span>
            <br>
             
            <label>Giá đã giảm: </label>
            <span><?php echo $giadagiam_f; ?></span>
            
        </main>
        
        
    </body>
</hmtl>
