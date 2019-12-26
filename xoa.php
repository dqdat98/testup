<?php 
	$id = $_GET['id'];
	include 'config.php';
	$sql = 'delete from cauthu where mact = '.$id;
	mysqli_query($connect,$sql);
	header('location:designfootball.php');
 ?>