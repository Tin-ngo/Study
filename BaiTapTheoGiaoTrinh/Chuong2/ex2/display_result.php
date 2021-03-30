<?php
$dautu = filter_input(INPUT_POST, 'dautu', FILTER_VALIDATE_FLOAT);
$laisuat = filter_input(INPUT_POST, 'laisuat',FILTER_VALIDATE_FLOAT);
$nam  = filter_input(INPUT_POST, 'sonam', FILTER_VALIDATE_INT);

//tìm lỗi khi nhập
        if($dautu === FALSE){
            $error_messenger = 'số tiền đầu tư phải là một con số hợp lệ';
        }else if($dautu <= 0 ){
            $error_messenger = 'Sô tiền đầu tư phải lớn hơn không';
        }else if($laisuat === FALSE){
           $error_messenger = 'Số lãi suất phải là một số hợp lệ';
        }else if($laisuat <= 0 ){
            $error_messenger = 'Số lãi suất phải lớn hơn 0';
        }else if($laisuat >15 ){
            $error_messenger = 'Số lãi suất phải nhỏ hơn hoặc băng 15';
        }else if($nam === FALSE){
            $error_messenger = 'Số năm phải là một số hợp lệ';
            
        }else if($nam <= 0 ){
            $error_messenger = 'Số năm phải lơn hơn 0';
        }else if($nam >30 ){
            $error_messenger = 'Số năm phải nhơn hơn 31';
        } else {
            $error_messenger = '';
        }
        
        if($error_messenger != NULL){
            include('index.php');
            exit();
        }

     // tính toán   
    $Giatrituonglai = $dautu;
    for ($i = 1; $i <= $nam; $i++) {
        $Giatrituonglai += $Giatrituonglai * $laisuat * 0.01;
    }
    // định dạng
    $dautu_f = '$'.number_format($dautu, 2);
    $laisuat_f = $laisuat.'%';
    $Giatrituonglai_f = '$'.number_format($Giatrituonglai, 2);

  ?>


<!DOCTYPE html>
<html>
<head>
    <title>Tính toán lãi suất hằn năm</title>
    <link rel="stylesheet" type="text/css" href="main.scss"/>
</head>
<body>
    <main>
        <h1>Tính toán lãi suất tương lai</h1>

        <label>Số tiền đầu tư:</label>
        <span><?php echo htmlspecialchars($dautu_f); ?></span><br />

        <label>Lãi suất hằn năm</label>
        <span><?php echo htmlspecialchars($laisuat_f); ?></span><br />

        <label>Số năm</label>
        <span><?php echo htmlspecialchars($nam); ?></span><br />

        <label>Giá trị có trong tương lai</label>
        <span><?php echo htmlspecialchars($Giatrituonglai_f); ?></span><br />
        
        <p>Tính toán này được tính vào: <?php echo date('d/m/y'); ?>.</p>
    </main>
</body>
</html>