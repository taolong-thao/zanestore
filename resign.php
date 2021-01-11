<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="login.css">

	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<form name="form1" action="temp.php" method="POST">
					<?php 
					if(@$_GET['Empty']==true){
						?>
							<div style="color: brown; text-align:center"><?php echo $_GET['Empty']?></div>
						<?php
					}
					?>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Your Name is reauired">

						<span class="label-input100">Your Name</span>
						<input class="input100" type="text" name="title" placeholder="Type Your Name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="resign_day" data-validate="Birth Day is reauired">
						<span class="label-input100">Birth Day</span>
						<select class="form-control" name="subject" id="subject" onclick="datetime()" required>
							<option>Ngày</option>
						</select>
						<select class="form-control input-sm" name="subject_month" id="subject_month" onclick="monthtime()" required>
							<option>Tháng</option>
						</select>
						<select class="form-control" name="subject_year" id="subject_year" onclick="yeartime()" required>
							<option>Năm</option>
						</select>
					</div>
					<div>
						<span class="label-input100">Address</span>
						<select class="form-control" name="flatform">
							<option value="An Giang">An Giang
							<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
							<option value="Bắc Giang">Bắc Giang
							<option value="Bắc Kạn">Bắc Kạn
							<option value="Bạc Liêu">Bạc Liêu
							<option value="Bắc Ninh">Bắc Ninh
							<option value="Bến Tre">Bến Tre
							<option value="Bình Định">Bình Định
							<option value="Bình Dương">Bình Dương
							<option value="Bình Phước">Bình Phước
							<option value="Bình Thuận">Bình Thuận
							<option value="Bình Thuận">Bình Thuận
							<option value="Cà Mau">Cà Mau
							<option value="Cao Bằng">Cao Bằng
							<option value="Đắk Lắk">Đắk Lắk
							<option value="Đắk Nông">Đắk Nông
							<option value="Điện Biên">Điện Biên
							<option value="Đồng Nai">Đồng Nai
							<option value="Đồng Tháp">Đồng Tháp
							<option value="Đồng Tháp">Đồng Tháp
							<option value="Gia Lai">Gia Lai
							<option value="Hà Giang">Hà Giang
							<option value="Hà Nam">Hà Nam
							<option value="Hà Tĩnh">Hà Tĩnh
							<option value="Hải Dương">Hải Dương
							<option value="Hậu Giang">Hậu Giang
							<option value="Hòa Bình">Hòa Bình
							<option value="Hưng Yên">Hưng Yên
							<option value="Khánh Hòa">Khánh Hòa
							<option value="Kiên Giang">Kiên Giang
							<option value="Kon Tum">Kon Tum
							<option value="Lai Châu">Lai Châu
							<option value="Lâm Đồng">Lâm Đồng
							<option value="Lạng Sơn">Lạng Sơn
							<option value="Lào Cai">Lào Cai
							<option value="Long An">Long An
							<option value="Nam Định">Nam Định
							<option value="Nghệ An">Nghệ An
							<option value="Ninh Bình">Ninh Bình
							<option value="Ninh Thuận">Ninh Thuận
							<option value="Phú Thọ">Phú Thọ
							<option value="Quảng Bình">Quảng Bình
							<option value="Quảng Bình">Quảng Bình
							<option value="Quảng Ngãi">Quảng Ngãi
							<option value="Quảng Ninh">Quảng Ninh
							<option value="Quảng Trị">Quảng Trị
							<option value="Sóc Trăng">Sóc Trăng
							<option value="Sơn La">Sơn La
							<option value="Tây Ninh">Tây Ninh
							<option value="Thái Bình">Thái Bình
							<option value="Thái Nguyên">Thái Nguyên
							<option value="Thanh Hóa">Thanh Hóa
							<option value="Thừa Thiên Huế">Thừa Thiên Huế
							<option value="Tiền Giang">Tiền Giang
							<option value="Trà Vinh">Trà Vinh
							<option value="Tuyên Quang">Tuyên Quang
							<option value="Vĩnh Long">Vĩnh Long
							<option value="Vĩnh Phúc">Vĩnh Phúc
							<option value="Yên Bái">Yên Bái
							<option value="Phú Yên">Phú Yên
							<option value="Tp.Cần Thơ">Tp.Cần Thơ
							<option value="Tp.Đà Nẵng">Tp.Đà Nẵng
							<option value="Tp.Hải Phòng">Tp.Hải Phòng
							<option value="Tp.Hà Nội">Tp.Hà Nội
							<option value="TP  HCM">TP HCM
						</select>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="username" placeholder="Type your User Name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="psw" placeholder="Type your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Password is required">
						<span class="label-input100">Enter Password</span>
						<input class="input100" type="password" name="psw2" placeholder="Type your Enter password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div>
					<span class="label-input100">Check Code</span>
					<span name="code" style="background-color: dodgerblue; margin-left:10px ;">
						<?php $rnd = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
						echo substr(str_shuffle($rnd), 0, 5);
						
						?>
					</span>	
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Code is required">
						<span class="label-input100">Enter Code</span>
						<input class="input100" type="text" name="codecheck" placeholder="Type your Enter Code" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">

					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Resign
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or You have account
						</span>

						<a href="login.php" class="txt2">
							Backup Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script src="select.js"></script>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>