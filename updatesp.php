<?php
// if(isset($_POST['submit'])){}
$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'do not connect';
}
if (!mysqli_select_db($con, 'resign')) {
    echo 'database not select';
}

$temp = $_GET['namesp'];
$sql = "SELECT * FROM giayboot where namesp='$temp'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if (count($_POST) > 0) {
    $tmp_name = $_FILES['imagepro']['tmp_name'];
$anh = $_FILES['imagepro']['name'];
$path = "images/";
move_uploaded_file($tmp_name, $path . $anh);

    $sql_kq = "UPDATE giayboot set loaisp='" . $_POST['theloai'] . "', namesp='" . $_POST['namesp'] . "',imgsp='" . $anh . "',pricesp='" . $_POST['giasp'] . "',motasp='" . $_POST['motasp'] . "',xuatsusp='" . $_POST['xuatsusp'] . "',nhasxsp='" . $_POST['nhasxsp'] . "' where namesp='$temp'";
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
<div id="modal-wrapper" class="modal">

    <form enctype='multipart/form-data' class="modal-content animate" action="" method="POST">

        <div class="imgcontainer">
            <img src="images/zane.jpg" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Sửa Sản Phẩm</h1>
        </div>

        <div class="container">
        <?php $conn = mysqli_connect('localhost', 'root', '', 'resign') or die($conn->connect_error);;
                $loaisp = mysqli_query($conn, "SELECT*FROM loaisp");
                ?>
            <select style=" width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" class="form-control" name="theloai" id="theloai" required>
                <option value="" disabled selected> Chọn Thể Loại:</option>
                <?php while ($rows = mysqli_fetch_array($loaisp)) { ?>
                        <option><?php echo $rows['theloai']; ?></option>
                    <?php } ?>
               

            </select>
            <input type="text" placeholder="<?php echo $row['namesp']; ?>" value="<?php echo $row['namesp']; ?>" name="namesp">
            <input style="width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" type="file" name="imagepro">
            <input type="text" placeholder="<?php echo $row['pricesp']; ?>" value="<?php echo $row['pricesp']; ?>" name="giasp">
            <textarea name="motasp" style="width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" placeholder="<?php echo $row['motasp']; ?>" name="motasp"><?php echo $row['motasp']; ?></textarea>
            <input type="text" placeholder="<?php echo $row['xuatsusp']; ?>" value="<?php echo $row['xuatsusp']; ?>" name="xuatsusp">

            <select style=" width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" class="form-control" name="nhasxsp" id="subject" required>
                <option value="" disabled selected> Chọn Nhà Sản Xuất:</option>
                <option>ZaneStore</option>
                <option>Dr Martin</option>
                <option>Convers</option>
                <option>Vans</option>
                <option>balenceaga</option>
            </select>

            <button type="submit">Sửa Sản Phẩm</button>
        </div>
        <a href="admin.php" style="text-decoration:none; float:right; margin-right:34px; margin-top:auto; color:#888;">Trở lại</a>
    </form>

</div>

</html>