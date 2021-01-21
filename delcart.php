<?php 
    $con=mysqli_connect("localhost","root","","resign") or die($con->connect_error);
    $sql=mysqli_query($con,"SELECT * FROM cart");
     
    $del="DELETE FROM cart where madh='".$_GET['madh']."'";
    if(mysqli_query($con,$del))
    {
        echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
        echo("<script>window.location = 'cart.php';</script>");
    }
?>