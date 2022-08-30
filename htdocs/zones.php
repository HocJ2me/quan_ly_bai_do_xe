<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	 <meta http-equiv="refresh" content="5">

	<?php
			include('inc/head.php');
			include('inc/connect.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Thông tin bãi đỗ xe</p>
	<?php 
				$sql="SELECT * FROM `thong_tin_diem_do` WHERE nhiet_do > 50;";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count>0)
				{	
					$myAudioFile = "Tieng-coi-canh-bao.mp3";
					echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
				}
	
	?>
	<div class="strt"> <p>Bãi đỗ xe A</p>
	<table class="gridtable">
		<?php $street ="CITY HALL"; ?>
		<tr>
			<?php 
				$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"1\" AND trang_thai = \"1\"";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\"background: Green; color: White; \"><center><h3>A 001</h3><center><img src=\"src/car.png\" /></td>";
					$data = mysqli_fetch_array($result);
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";
				}
				else{
					$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"1\"";
					$result=mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					$data = mysqli_fetch_array($result);
					echo "<td style=\"background: Red; color: White; \"><center><h3>A 001</h3><center><img src=\"src/no_car.png\" /></td>";
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";

				}
			?>
		</tr>
		<tr>
			<?php 
				$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"2\" AND trang_thai = \"1\"";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\"background: Green; color: White; \"><center><h3>A 002</h3><center><img src=\"src/car.png\" /></td>";
					$data = mysqli_fetch_array($result);
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";
				}
				else{
					$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"2\"";
					$result=mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					$data = mysqli_fetch_array($result);
					echo "<td style=\"background: Red; color: White; \"><center><h3>A 002</h3><center><img src=\"src/no_car.png\" /></td>";
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";

				}
			?>
		</tr>
		<tr>
			<?php 
				$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"3\" AND trang_thai = \"1\"";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\"background: Green; color: White; \"><center><h3>A 003</h3><center><img src=\"src/car.png\" /></td>";
					$data = mysqli_fetch_array($result);
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";
				}
				else{
					$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"3\"";
					$result=mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					$data = mysqli_fetch_array($result);
					echo "<td style=\"background: Red; color: White; \"><center><h3>A 003</h3><center><img src=\"src/no_car.png\" /></td>";
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";

				}
			?>
		</tr>
	</table>
	
	</div>
	
	
	
	<div class="strt"> <p>Bãi đỗ xe B</p>
	<table class="gridtable">
		<?php $street ="CITY HALL"; ?>
		<tr>
			<?php 
				$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"4\" AND trang_thai = \"1\"";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\"background: Green; color: White; \"><center><h3>B 001</h3><center><img src=\"src/car.png\" /></td>";
					$data = mysqli_fetch_array($result);
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";
				}
				else{
					$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"4\"";
					$result=mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					$data = mysqli_fetch_array($result);
					echo "<td style=\"background: Red; color: White; \"><center><h3>B 001</h3><center><img src=\"src/no_car.png\" /></td>";
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";

				}
			?>
		</tr>
		<tr>
			<?php 
				$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"5\" AND trang_thai = \"1\"";
				$result=mysqli_query($conn, $sql);
				$count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\"background: Green; color: White; \"><center><h3>B 002</h3><center><img src=\"src/car.png\" /></td>";
					$data = mysqli_fetch_array($result);
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";
				}
				else{
					$sql="SELECT * FROM thong_tin_diem_do WHERE id = \"5\"";
					$result=mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					$data = mysqli_fetch_array($result);
					echo "<td style=\"background: Red; color: White; \"><center><h3>B 002</h3><center><img src=\"src/no_car.png\" /></td>";
					echo "<td><center><h3>Nhiệt độ ".$data['nhiet_do']." *C</h3><center></td>";

				}
			?>
		</tr>
	</table>
	
	</div>
	</div>
	<p class="status">Đỏ -> Đang trống, Xanh -> Đã có xe</p>
	
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>