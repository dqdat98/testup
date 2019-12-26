<?php 
	include 'config.php';
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$year = $_POST['year'];
		$country = $_POST['country'];
		var_dump($country);
		$phone = $_POST['phone'];
		$sql = 'INSERT INTO cauthu(mact,hoten,namsinh,quequan,sodienthoai) VALUES(
			"'.$id.'",
			"'.$name.'",
			"'.$year.'",
			"'.$country.'",
			"'.$phone.'"
		)';
		$test = mysqli_query($connect,$sql);
		if ($test) {
			echo "ok";
			header('location:designfootball.php');
		}else
		{
			echo "that bai";
		}

	}
 ?>
 <?php echo('OK') ?>