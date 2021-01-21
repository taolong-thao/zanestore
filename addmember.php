<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'resign') or die($conn->connect_error);
 $sql = mysqli_query($conn, "SELECT*FROM dangky");

 $dc=$_POST['flatform'];
 $name=$_POST['title'];
 $username=$_POST['username'];
 $pass=$_POST['psw'];

 $sql="INSERT INTO dangky(hoten,diachi,username,pasw) VALUES ('$dc','$name','$username','$pass')";
 if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>alert('Thêm Thành Công');</script>";
    echo("<script>window.location = 'admin.php';</script>");
 }
?>