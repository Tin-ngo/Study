<?php //ob_start();
	include_once('../connect.php');
     // upload hinh anh	
    $icon=$_FILES['image']['name'];   //name là tên biến sẽ lưu phần tên image trên máy chủ   //up lên db
     //tmp_name là tên biến của server sẽ lưu tên của file mới up lên //lưu để chuẩn bị lưu vào thư mục bai7
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
     //up file ảnh vào trong thư mục image trong foder bai7 //lưu từ server về máy
    move_uploaded_file($anhminhhoa_tmp,"../image/".$icon); 

//	$theloai = $_POST['TenTL'];
//	$thutu = $_POST['ThuTu'];
//	$an = $_POST['AnHien'];
    
        $theloai = filter_input(INPUT_POST, 'TenTL');
        $thutu = filter_input(INPUT_POST, 'ThuTu');
        $an = filter_input(INPUT_POST, 'AnHien');
	
	$sql = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$an','$icon')";

	if(mysqli_query($connect,$sql))
	{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
//mysqli_close($link);     // không cần đón cũng được

?>
