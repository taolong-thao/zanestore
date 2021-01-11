<?php
    // if(isset($_POST['submit'])){}
    $con= mysqli_connect('127.0.0.1','root','');
    if(!$con){
       echo 'do not connect';
    }
    if(!mysqli_select_db($con,'resign')){
       echo 'database not select';
    }
    
    $temp = $_GET['namesp'];
    $sql="SELECT * FROM giayboot where namesp='$temp'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    
  
        
        $loaisp=mysqli_escape_string($con,$_POST['theloai']);
        $tensp=mysqli_escape_string($con,$_POST['namesp']);
        $giasp=mysqli_escape_string($con,$_POST['giasp']);
        $motasp=mysqli_escape_string($con,$_POST['motasp']);
        $xuatsusp=mysqli_escape_string($con,$_POST['xuatsusp']);
        $nhasx=mysqli_escape_string($con,$_POST['nhasx']);        
        $anh=$_FILES['imagepro']['name'];
        if($anh!=null){
       $tmp_name=$_FILES['imagepro']['tmp_name'];
       $anh=$_FILES['imagepro']['name'];
       $path="images/";
        move_uploaded_file($tmp_name,$path.$anh);
        $sql="UPDATE giaboot set imgsp='$anh' where namesp='$temp'";
        mysqli_query($con,$sql);
        header('location:admin.php');
    }
        $sql="UPDATE giayboot set loaisp='$loaisp',namesp=' $tensp',imgsp='$anh',pricesp='$giasp',motasp=' $motasp',xuatsusp='$xuatsusp',nhasxsp='$nhasx'";
    mysqli_query($con,$sql);   
    header('location:admin.php');

    
?>

 <div id="modal-wrapper" class="modal">

<form enctype='multipart/form-data' class="modal-content animate" action="" method="POST">

    <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="images/zane.jpg" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Thêm Sản Phẩm</h1>
    </div>

    <div class="container">
        <select style=" width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" class="form-control" name="theloai" id="theloai" required>
            <option value="" disabled selected> Chọn Thể Loại:</option>
            <option>Giày Cổ Cao</option>
            <option>Giày Lười</option>
            <option>Giày Cổ Thấp</option>
            <option>Giày Tây</option>
            <option>Dây Lưng</option>
            <option>Ví Da</option>
            <option>Tất Họa Tiết</option>

        </select>
        <input type="text" placeholder="<?php echo $row['namesp']; ?>" name="namesp" value="<?php echo $row['namesp']; ?>">
        <input style="width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" type="file" name="imagepro">
        <input type="text" placeholder="<?php echo $row['pricesp']; ?>" name="giasp">
        <textarea name="motasp" style="width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" placeholder="     Mô Tả Sản Phẩm"></textarea>
        <input type="text" placeholder="<?php echo $row['xuatsusp']; ?>" name="xuatsusp">

        <select style=" width: 90%;
margin: 8px 26px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
font-size:16px;" class="form-control" name="nhasx" id="subject" required>
            <option value="" disabled selected> Chọn Nhà Sản Xuất:</option>
            <option>ZaneStore</option>
            <option>Dr Martin</option>
            <option>Convers</option>
            <option>Vans</option>
            <option>balenceaga</option>
        </select>

        <button type="submit">Thêm Sản Phẩm</button>
    </div>

</form>

</div>
