<?php
    // if(isset($_POST['submit'])){}
    $con= mysqli_connect('127.0.0.1','root','');
    if(!$con){
       echo 'do not connect';
    }
    if(!mysqli_select_db($con,'resign')){
       echo 'database not select';
    }

        $loaisp=$_POST['theloai'];
        $tensp=$_POST['namesp'];
        $giasp=$_POST['giasp'];
        $motasp=$_POST['motasp'];
        $xuatsusp=$_POST['xuatsusp'];
        $nhasx=$_POST['nhasx'];       
        
        

       $tmp_name=$_FILES['imagepro']['tmp_name'];
       $anh=$_FILES['imagepro']['name'];
       $path="images/";
        move_uploaded_file($tmp_name,$path.$anh);
        $sql="INSERT INTO giayboot(loaisp,namesp,imgsp,pricesp,motasp,xuatsusp,nhasxsp) VALUES ('$loaisp','$tensp','$anh','$giasp','$motasp','$xuatsusp','$nhasx')";
        if(!mysqli_query($con,$sql)){
            echo'them that bai';
        }
        else{
            echo'them thanh cong';
            header('location:admin.php');
        }
    
    
?>
