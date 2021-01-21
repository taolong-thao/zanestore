<?php 
    $con=mysqli_connect("localhost","root","","resign") or die($con->connect_error);
    $sql=mysqli_query($con,"SELECT * FROM nhasxsp");
     
    $del="DELETE FROM nhasxsp where nhasx='".$_GET['nhasx']."'";
    if(mysqli_query($con,$del))
    {
        echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
        echo("<script>window.location = 'admin.php';</script>");
    }
?>