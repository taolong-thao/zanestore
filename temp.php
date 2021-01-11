
<?php 
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
 }
 if(isset($_POST['submit'])){
$con= mysqli_connect('127.0.0.1','root','');
if(!$con){
   echo 'do not connect';
}
if(!mysqli_select_db($con,'resign')){
   echo 'database not select';
}
$hoten=$_POST['title'];
$ngaysinh=$_POST['subject'];
$thangsinh=$_POST['subject_month'];
$namsinh=$_POST['subject_year'];
$diachi=$_POST['flatform'];
$username=$_POST['username'];
$pasw=$_POST['psw'];
$pasw2=$_POST['psw2'];
// $codecheck=$_POST['codecheck'];
// $code=$_POST['code'];
$usercheck="SELECT * from dangky where  username='$username'";

if(!isset($ngaysinh)|| !isset($thangsinh)||!isset($namsinh)){
    header("location:resign.php?Empty=bạn chưa chọn ngày sinh");
    return false;
}

$result=mysqli_query($con,$usercheck);
$count=mysqli_num_rows($result);
if($count>0){
    header("location:resign.php?Empty=Tên Tài Khoản đã tồn tại");
    return false;
}

    if(strlen($pasw)<='8'){
    header("location:resign.php?Empty=password phải lớn hơn 8 ký tự và nhỏ hơn 20 ký tự");
    return false;
    }
    if(!preg_match("#[0-9]+#",$pasw)) {
    header("location:resign.php?Empty=password phải có chứ số");
    return false;
    }
    if(!preg_match("#[A-Z]+#",$pasw)) {
        header("location:resign.php?Empty=password phải có chữ IN HOA");
    return false;
    }
    if(!preg_match("#[a-z]+#",$pasw)) {
        header("location:resign.php?Empty=password phải có chữ in thường");
    return false;
    }

}
if($pasw2!=$pasw){
    header("location:resign.php?Empty=Mật khẩu không trùng khớp");
}

else{
$sql="INSERT INTO dangky(hoten,ngaysinh,thangsinh,namsinh,diachi,username,pasw) VALUES ('$hoten','$ngaysinh','$thangsinh','$namsinh','$diachi','$username','$pasw')";
if(!mysqli_query($con,$sql)){
    echo 'đăng ký thất bại';
}
else{
    echo 'đăng ký thành công';
    header("refresh:2; url=login.php");

}
}
 
?>
