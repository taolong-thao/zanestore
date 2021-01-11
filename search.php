<?php
    $mysqli = new mysqli('localhost', 'root', '', 'resign') or die($mysqli->connect_error);
  if (isset($_POST['searchbt'])) {
    $name_search = $_POST['search'];
    $sql = "SELECT * FROM giayboot where namesp='$name_search' or loaisp='$name_search' or nhasxsp='$name_search'";
    mysqli_query($mysqli, $sql);
} else {
    $sql = "SELECT * FROM giayboot";
}
$result_page = mysqli_query($mysqli, $sql);
header('location:shop.php');
?>

