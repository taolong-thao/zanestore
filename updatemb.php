<?php
// if(isset($_POST['submit'])){}
$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'do not connect';
}
if (!mysqli_select_db($con, 'resign')) {
    echo 'database not select';
}

$temp = $_GET['username'];
$sql = "SELECT * FROM dangky where username='$temp'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if (count($_POST) > 0) {
    $sql_kq = "UPDATE dangky set hoten='" . $_POST['title'] . "', diachi='" . $_POST['flatform'] . "',username='" . $_POST['username'] . "',pasw='" . $_POST['psw'] . "'where username='$temp'";
    mysqli_query($con, $sql_kq);
    echo "<script type='text/javascript'>alert('Sửa Thành Công');</script>";
    echo("<script>window.location = 'admin.php';</script>");
}
?>
<html>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
/* .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
} */

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
<div id="themnguoidung" class="modal">

<form enctype='multipart/form-data' class="modal-content animate" action="#" method="POST">

    <div class="imgcontainer">
        <span onclick="document.getElementById('themnguoidung').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="images/zane.jpg" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Thêm Người Dùng</h1>
    </div>
 
    <div class="container">
    <form  action="#" method="POST">
					<?php 
					if(@$_GET['Empty']==true){
						?>
							<div style="color: brown; text-align:center"><?php echo $_GET['Empty']?></div>
						<?php
					}
					?>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Your Name is reauired">
                  
						<span class="label-input100">Your name</span>
						<input class="input100" type="text" name="title" placeholder="Type Your Name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div >
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
					
					
					<div class="text-right p-t-8 p-b-31">

					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Sửa Người Dùng
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
					

						<a href="login.php" class="txt2">
							Backup admin
						</a>
					</div>
    </div>
</form>

</div>

</html>