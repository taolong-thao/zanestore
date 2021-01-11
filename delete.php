<?php
 
    $con= mysqli_connect('localhost','root','');
    if(!$con){
       echo 'do not connect';
    }
    if(!mysqli_select_db($con,'resign')){
       echo 'database not select';
    }
    
  $temp = $_GET['namesp'];
       $sql="DELETE FROM giayboot where namesp='$temp'";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            header("location:admin.php");
        }
    
?>
