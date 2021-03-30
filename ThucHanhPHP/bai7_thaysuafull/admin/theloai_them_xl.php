<?php //ob_start();
	include_once('../connect.php');
		// upload hinh anh	
	// image là tên trong form ở lớp trước còn name là dùng để lưu tên ảnh trên erver
	$icon=$_FILES['image']['name'];    
	// tmp_name là mặc định phải để vậy kiêu như lưu 1 file xuống thư mục image trong máy tính
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    //moe lưu file xuống thư mục image trong máy tính
    move_uploaded_file($anhminhhoa_tmp,"../image/".$icon);   

	//$theloai = $_POST['TenTL'];
	$theloai=filter_input(INPUT_POST,"TenTL");
	
	//$thutu = $_POST['ThuTu'];
	$thutu=filter_input(INPUT_POST,"ThuTu");
	//$an = $_POST['AnHien'];
	$an=filter_input(INPUT_POST,"AnHien");
	
	
	$sl = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$an','$icon')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
//mysqli_close($link);

?>
