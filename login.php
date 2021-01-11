<?php require './fbconfig.php'; ?>
<?php if (isset($_SESSION['access_token'])) : ?>
	<a href="logout.php"> logout</a>
<?php else : ?>
<?php endif; ?>
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
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<form id="dn" action="xuly.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<div>
						<?php
						if (@$_GET['Empty'] == true) {
						?>
						<div style="color: brown; text-align:center"><?php echo $_GET['Empty']?></div>
						<?php
						}

						?>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pasw" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">

					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="<?php echo $login_url; ?>" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>
						<!-- <?php

								$login_button = '';
								if (isset($_GET["code"])) {
									$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
									if (!isset($token['error'])) {
										$google_client->setAccessToken($token['access_token']);
										$_SESSION['access_token'] = $token['access_token'];
										$google_service = new Google_Service_Oauth2($google_client);
										$data = $google_service->userinfo->get();
										if (!empty($data['given_name'])) {
											$_SESSION['user_first_name'] = $data['given_name'];
										}
										if (!empty($data['family_name'])) {
											$_SESSION['user_last_name'] = $data['family_name'];
										}
										if (!empty($data['email'])) {
											$_SESSION['user_email_address'] = $data['email'];
										}
										if (!empty($data['gender'])) {
											$_SESSION['user_gender'] = $data['gender'];
										}
										if (!empty($data['picture'])) {
											$_SESSION['user_image'] = $data['picture'];
										}
									}
								}
								// if (!isset($_SESSION['access_token'])) {
								// 	$login_button = '<a  href="' . $google_client->createAuthUrl() . '" class="login100-social-item bg3">
								// 	<i class="fa fa-google"></i>
								// </a>';
								// }
								// 
								?>
						// <?php
							// if ($login_button == '') {
							// 	echo '<img src="' . $_SESSION["user_image"] . '"/>';
							// 	echo '<h3 ' . $_SESSION["user_first_name"] . '' . $_SESSION['user_last_name'] . '</h3>';
							// 	echo '<h3>' . $_SESSION['user_email_address'] . '</h3>';
							// 	echo '<a href="logout.php"> logout</a>';
							// } else {
							// 	echo '<div>' . $login_button . '</div>';
							// }
							// 
							?> -->

					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="resign.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script>
		var x = document.getElementById('dn');
		var y = document.getElementById('dk');
		var z = document.getElementById('btn');

		function dk() {

		}
	</script>
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