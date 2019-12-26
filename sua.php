<?php 
	include 'config.php';
	$id = $_GET['id'];
	$que = 'select * from cauthu where mact='.$id;
	
	$result = mysqli_query($connect, $que);
	$row = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="banner"></div>
		<div class="main">
			<form method="post" action="xulisua.php">
				<table>
					<input type="hidden" name="ma" value="<?php echo $id ?>">
				<tr>
					<th>mã cầu thủ</th>
					<td>
						<input type="text" name="id" value="<?php echo $row['mact'] ?>">
					</td>
				</tr>
				<tr>
					<th>Họ tên</th>
					<td>
						<input type="text" name="name" value="<?php echo $row['hoten'] ?>">
					</td>
				</tr>
				<tr>
					<th>năm sinh</th>
					<td>
						<select name="year">
							<?php
							for ($i=1998; $i < 2003 ; $i++) {
							?>
							<option value="<?php echo $i?>"><?php echo $i; ?></option>
							<?php	
							 } 
							 ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>quê quán</th>
					<td>
						<select name="country">
							<?php
							$qq = array('hà nội','hà tây','nam định','hòa bình','đà nẵng');
							foreach ($qq as $value) {
							?>
							<option value="<?php echo $value?>"><?php echo $value; ?></option>
							<?php	
							 } 
							 ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>số điện thoại</th>
					<td>
						<input type="text" name="phone" value="<?php echo $row['sodienthoai'] ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="submit" name="submit" value="sửa">
						
					</td>
				</tr>
			</table>
			</form>
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>