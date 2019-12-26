<?php 
	include 'config.php';
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$year = $_POST['year'];
		$country = $_POST['country'];
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
			$note = 'thêm thành công';
		}else{
			$note = 'thêm thất bại';
		}

	}
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
			<p><?php if (isset($note)) {
				echo $note;
			} ?></p>
			<form method="post" action="index.php">
				<table>
				<tr>
					<th>mã cầu thủ</th>
					<td>
						<input type="text" name="id">
					</td>
				</tr>
				<tr>
					<th>Họ tên</th>
					<td>
						<input type="text" name="name">
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
						<input type="text" name="phone">
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="submit" name="submit" value="Thêm mới">
						<input type="reset" name="" value="nhập lại">
						<a href="designfootball.php" type="button">hiện thị</a>
					</td>
				</tr>
			</table>
			</form>
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>