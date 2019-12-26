<?php 
		$ma = $_POST['ma'];
		$id = $_POST['id'];
		$name = $_POST['name'];
		$year = $_POST['year'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		include 'config.php';
		$sql = 'UPDATE cauthu SET 
		mact="'.$id.'",
		hoten="'.$name.'",
		namsinh="'.$year.'",
		quequan="'.$country.'",
		sodienthoai="'.$phone.'" WHERE mact=
		'.$ma;
		mysqli_query($connect,$sql);
		header('location:designfootball.php');
 ?>