<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'resign') or die($conn->connect_error);
 $sql = mysqli_query($conn, "SELECT*FROM dangky");

 $del="DELETE FROM dangky where username='".$_GET['username']."'";
 if(mysqli_query($conn,$del)){
    echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
    echo("<script>window.location = 'admin.php';</script>");
 }
?>