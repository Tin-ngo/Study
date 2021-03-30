<?php
include("../connect.php");
if(isset($_GET["idTL"]))
{
//	$key=$_GET["idTL"];
    $key = filter_input(INPUT_POST, "idTL");

}
	$slq="delete from theloai where idTL=".$_GET["idTL"];   // có thể dùng idTL="$key;
//if(mysql_query($sl))
if(mysqli_query($connect,$slq))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}


?>
