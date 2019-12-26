<?php 
	include 'config.php';
	$que = 'select * from cauthu';
	$result = mysqli_query($connect, $que);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="banner" style="background-color: #b9b9b9">
			<h1>Bài thi môn dữ liệu web</h1>
			<h3><b>Cao Văn Cường</b></h3>
		</div>
		<div class="main">
			<table border="2px">
				<tr>
					<th>mã cầu thủ</th>
					<th>họ tên</th>
					<th>năm sinh</th>
					<th>quê quán</th>
					<th>số điện thoại</th>
					<th colspan="2">thao tác</th>
				</tr>
				<?php
					while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['mact'] ?></td>
					<td><?php echo $row['hoten'] ?></td>
					<td><?php echo $row['namsinh'] ?></td>
					<td><?php echo $row['quequan'] ?></td>
					<td><?php echo $row['sodienthoai'] ?></td>
					<td>
						<a href="xoa.php?id=<?php echo $row['mact'] ?>">Xóa</a>
					</td>
					<td>
						<a href="sua.php?id=<?php echo $row['mact']?>">Sửa</a>
					</td>
				</tr>
				<?php	 	
					 } 
				 ?>
				
			</table>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>