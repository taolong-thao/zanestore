<?php 
    $con=mysqli_connect('localhost','root','','resign') or die($con->connect_error);
    $sql=mysqli_query($con,'SELECT * FROM loaisp');
    $row=mysqli_fetch_array($sql);
   if(count($_POST)>0)
   {
    $updt="UPDATE loaisp set theloai='".$_POST['theloaisp']."' where theloai='".$_GET['theloai']."'";
    mysqli_query($con, $updt);
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
            <h1 style="text-align:center">Sửa thê loại Sản Phẩm</h1>
        </div>

        <div class="container">
     
            <input type="text" placeholder="<?php echo $row['theloai']; ?>" value="<?php echo $row['theloai']; ?>" name="theloaisp">
             <button type="submit">Sửa thể loại Sản Phẩm</button>
        </div>
        <a href="admin.php" style="text-decoration:none; float:right; margin-right:34px; margin-top:auto; color:#888;">Trở lại</a>
    </form>

</div>

</html>