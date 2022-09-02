<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$today = date('Y-m-d H:i:s');                 // March 10, 2001, 5:16 pm

	$position_1 = $_GET["d1"];
	$position_2 = $_GET["d2"];
	$position_3 = $_GET["d3"];
	$position_4 = $_GET["d4"];
	$position_5 = $_GET["d5"];
	
	
	// Kết nối CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'bai-do-xe-db');
	 
	// Kiểm tra kết nối
	if (!$conn) {
		die("Kết nối thất bại: " . mysqli_connect_error());
	}
	 

	$sql = "UPDATE `thong_tin_diem_do` SET `trang_thai`='".$position_1."' WHERE `id`='1'";
	$result = mysqli_query($conn, $sql);
	$sql = "UPDATE `thong_tin_diem_do` SET `trang_thai`='".$position_2."' WHERE `id`='2'";
	$result = mysqli_query($conn, $sql);
	$sql = "UPDATE `thong_tin_diem_do` SET `trang_thai`='".$position_3."' WHERE `id`='3'";
	$result = mysqli_query($conn, $sql);
	$sql = "UPDATE `thong_tin_diem_do` SET `trang_thai`='".$position_4."' WHERE `id`='4'";
	$result = mysqli_query($conn, $sql);
	$sql = "UPDATE `thong_tin_diem_do` SET `trang_thai`='".$position_5."' WHERE `id`='5'";
	$result = mysqli_query($conn, $sql);
	// ngắt kết nối
	mysqli_close($conn);

	
}
else 
{
	echo "Wrong API Key provided.";
}
?>