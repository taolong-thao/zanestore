<?php
session_start();
    if(isset($_POST['submit'])){
        $con=mysqli_connect('127.0.0.1','root','');
        if(!$con){
            echo 'do not connect';
         }
         if(!mysqli_select_db($con,'resign')){
            echo 'database not select';
         }
        $username=$_POST['username'];
        $password=$_POST['pasw'];
        $sql="SELECT*FROM dangky where username='$username' and pasw='$password'";
        $query=mysqli_query($con,$sql);
        $num_rows=mysqli_num_rows($query);
        if($num_rows==0){
            header("location:login.php?Empty=Sai Tài Khoản Hoặc Mật Khẩu");
        }
        else{
            $_SESSION['username']=$_POST['username'];
            header("location:index.php");
        }
    }

 ?>