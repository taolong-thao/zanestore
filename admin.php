<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZANEStore -WE WILL ALLWAYS BESIDE YOU</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/zane.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/dialog-box.css">
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="our-link">
                        <ul>
                            <li><a href="login.php"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="login-box">
                        <div class="login-box">
                            <?php require './fbconfig.php'; ?>
                            <?php if (isset($_SESSION['access_token'])) : ?>
                                <a style="color:  #b0b435;" href="logout.php"> logout</a>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                        <div class="login-box">
                            <?php if (isset($_SESSION['username']))
                                echo 'Hi  ' . $_SESSION['username'] . '  <a style="color:  #b0b435;" href="logout.php"> logout</a>' ?>

                        </div>
                        <div class="divname" <?php if (isset($_SESSION['username']) || isset($_SESSION['access_token'])) {
                                                    echo " style='display: none'";
                                                } ?>> <select onchange="if (this.value) window.location.href=this.value" id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                                <option value="resign.php">Register Here</option>
                                <option value="login.php">Sign In</option>
                            </select></div>

                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Luôn tặng kèm Tất cho mỗi sản phẩm
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> SALE 30% - 50% Những mẫu lẻ size
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Ưu đãi khách hàng thân thiết
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Nhân Viên tư vấn nhiệt tình chu đáo
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 1 đổi 1 trong 1 năm nếu sản phảm bị nổ da
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Bảo dưỡng miễn phí chọn đời
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header id="headerid" class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img style="border-radius: 100px;" src="images/zane.jpg" alt="Avatar" class="avatar"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Giới Thiệu</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.php">Tất cả sản phẩm</a></li>
                                <li><a href="shop-detail.php">Thông tin sản phẩm</a></li>
                                <li><a href="cart.php">Giỏ hàng của tôi</a></li>
                                <li><a href="my-account.php">Tài Khoản của tôi</a></li>
                                <li><a href="wishlist.php">Các sản phẩm đã chọn</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Bộ Sưu Tập</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Liên Hệ với chúng tôi</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                                <p>My Cart</p>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a onclick="muticlick()" href="#"> <i class="fas fa-plus"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Thêm sản phẩm</h4>
                                    <p>Giày,Dép,Vớ,Dây Lưng,Ví</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a onclick="muticlick1()" href="#"><i class="fas fa-trash-alt"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xóa sản phẩm</h4>
                                    <p>xóa những mặt hàng không cần thiết</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fas fa-edit"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Update Sản Phẩm</h4>
                                    <p>Edit addresses for orders and gifts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Thêm Loại sản phẩm</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-paypal"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xóa loại sản phẩm</h4>
                                    <p>View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-amazon"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Update loại sản phẩm</h4>
                                    <p>Add money to your balance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Thêm nhà sản xuất</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-paypal"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xóa nhà sản xuất</h4>
                                    <p>View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-amazon"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Update nhà sản xuất</h4>
                                    <p>Add money to your balance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Thêm đơn đặt hàng</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-paypal"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xóa đơn đặt hàng</h4>
                                    <p>View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-amazon"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Update đơn đặt hàng</h4>
                                    <p>Add money to your balance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Thêm Người dùng</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-paypal"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xóa Người Dùng</h4>
                                    <p>View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-amazon"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Update Người Dùng</h4>
                                    <p>Add money to your balance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
    <!-- thêm sản phẩm -->
    <div id="modal-wrapper" class="modal">

        <form enctype='multipart/form-data' class="modal-content animate" action="configsp.php" method="POST">

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
                <input type="text" placeholder="Tên Sản Phẩm" name="namesp">
                <input style="width: 90%;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;" type="file" name="imagepro">
                <input type="text" placeholder="Giá Sản Phẩm" name="giasp">
                <textarea name="motasp" style="width: 90%;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;" placeholder="     Mô Tả Sản Phẩm"></textarea>
                <input type="text" placeholder="Xuất Sứ" name="xuatsusp">

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
    <!-- end thêm sản phẩm -->

    <!-- xóa sản phẩm  -->
    <div id="deletesp" class="modal">

        <form enctype='multipart/form-data' class="modal-content animate" action="delete.php" method="POST">

            <div class="imgcontainer">
                <span onclick="document.getElementById('deletesp').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="images/zane.jpg" alt="Avatar" class="avatar">
                <h1 style="text-align:center">Xóa Mặt Hàng</h1>
            </div>
            <?php $conn = mysqli_connect('localhost', 'root', '', 'resign') or die($conn->connect_error);;
            $sql = mysqli_query($conn, "SELECT*FROM giayboot");
            ?>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Loại Sản Phẩm</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Xóa</th>
                            <th scope="col">Sửa</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php while ($row = mysqli_fetch_array($sql)) { ?>

                        <tbody>

                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $row['loaisp'] ?></th>
                                <td name="sp"><?php echo $row['namesp'] ?></td>
                                <td><img style="height:50px;wight:40px;" src="images/<?php echo $row['imgsp'] ?>"></td>
                                <td><a onclick="return window.confirm(" Bạn chắc chắn muốn xóa không ?");" href="delete.php?namesp=<?php echo $row['namesp'] ?>" class="fas fa-times"> </a></td>
                                <td><a  href="updatesp.php?namesp=<?php echo $row['namesp'] ?>"  class="fas fa-edit" aria-hidden="true"> </a></td>
                            </tr>
                        </tbody><?php } ?>
                </table>
            </div>

        </form>

    </div>
    <!-- end xóa sản phẩm -->
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Thời Gian Hoạt Động</h3>
                            <ul class="list-time">
                                <li>Mọi Ngày Trong Tuần:09.00am đến 10.00pm</li>
                                <li>Có Thể Phục Vụ Sớm Hoặc Trễ Hơn Nếu Hẹn Trước</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Nhận Thông Báo Từ Zane</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Liên Kết</h3>
                            <p>Đi tới trang xã hội.</p>
                            <ul>
                                <li><a href="https://www.facebook.com/ZANEStore"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Giới Thiệu về Zane</h4>
                            <p>Chúng Tôi tự tin về chất lượng sản phầm của minh.Vì mọi sản phẩm đều được làm từ 100% Da bò nguyên chất tự nhiên,Mọi sản phẩm đều được bảo hành 1 năm(Nổ da bong tróc đổi mới).</p>
                            <p>Hãy tận hưởng cuộc sống bằng cách chăm chút những bước đi hằng ngày của bạn thật êm ái.Zane Store chúng tôi luôn đồng hành cùng bạn và đưa chất lượng cuộc sống lên tầm cao mới. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">Hướng dẫn đặt hàng</a></li>
                                <li><a href="#">Các sản phẩm bán chạy nhất</a></li>
                                <li><a href="#">FeedBack</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: 216 Hoàng Diệu 2 <br>Phường Linh Chiểu,<br> Quận Thủ Đức </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:0933932056">0933 932 056</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:dfe.angelstyle@gmail.com">dfe.angelstyle@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        var modal2 = document.getElementById('headerid');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modal2.style.display = "block";

            }
        }
    </script>
    </script>
    <script>
        function muticlick() {
            document.getElementById('modal-wrapper').style.display = 'block';
            document.getElementById('headerid').style.display = 'none';
        }
    </script>
    <script>
        function muticlick1() {
            document.getElementById('deletesp').style.display = 'block';
            document.getElementById('headerid').style.display = 'none';
        }
    </script>
    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>