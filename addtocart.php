<?php
    $mysqli = new mysqli('localhost', 'root', '', 'resign') or die($mysqli->connect_error);
    $sql="SELECT * FROM giayboot";
    $query=mysqli_query($mysqli,$sql);

    $_SESSION['namesp']=$_GET['namesp'];
    $pricesp=$_POST['pricesp'];
    $anh=$_POST['imgsp'];
    $soluong=$_POST['soluong'];
    $total=$price*$soluong;


    $form="INSERT INTO cart (namesp,imgsp,pricesp,soluongsp,total) VALUES ('$namesp','$pricesp','$anh','$soluong','$total')";
    if(mysqli_query($con,$form)){
        header('location:shop.php');
    }
?>