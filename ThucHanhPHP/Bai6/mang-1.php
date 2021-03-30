
<?php
        $mang=0;
        $tong=0;
        if(isset($_POST["btn_goi"])){
            $so_mang = filter_input(INPUT_POST, "nhap_mang");
            $mang = explode(",",$so_mang);
            $dem = count($mang);
            for($i=0;$i<$dem;$i++){
                $tong+= $mang[$i];
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nhập và tính toán trên dãy số</title>
	<meta charset="utf-8">
	<style>
	*{
    font-family: Tahoma;
	}
	table{
	    width: 400px;
	    margin: 100px auto;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
	</style>
</head>
<body>
	<form action="mang-1.php" method="POST" >
		<table>
			<thead>
				<tr>
					<th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nhập dãy số:</td>
					<td><input type="text" name="nhap_mang" value="<?php echo $_POST['nhap_mang'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_goi" value="Tổng dãy số" ></td>
				</tr>
				<tr>
					<td>Tổng dãy số:</td>
					<td><input type="text" name="ket_qua" disabled="disabled" value="<?php echo $tong ?>" ></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
