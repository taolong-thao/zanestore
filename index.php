<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php require './fbconfig.php'; ?>

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
                            <?php 
                            if ($_SESSION['username']=='admin') {
                                echo "<a href=" . 'admin.php' . " style=".'color:red;visibility: hidden;'.">Quản Lý Shop</a>";
                            }
                           
                            ?>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div  class="login-box">
                        <div class="login-box">
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

                    </div <div class="text-slid-box">
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
    <header class="main-header">
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
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.php">Tất cả sản phẩm</a></li>
                                <li><a href="cart.php">Giỏ hàng của tôi</a></li>
                              
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
              
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->

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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/mainlogo.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ZaneStore</strong></h1>
                            <p class="m-b-40">WE WILL ALLWAYS BESIDE YOU</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/giaylogo3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>ZaneStore <br> SALE MẠNHHHHH!</strong></h1>
                            <p class="m-b-40">ƯU ĐÃI CUỐI NĂM! GIẢM GIÁ SẬP SÀN</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/giaylogo2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>TOP MẪU GIÀY ĐẸP NHẤT</strong></h1>
                            <p class="m-b-40">THƯỜNG XUYÊN CẬP NHẬT MẪU MỚI</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/giaylogo3.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">TOP BOOTS &amp; LOW NECK</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/oxford.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">TOP OXFORD</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/giayluoi.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">TOP LAZY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <div class="box-add-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img class="img-fluid" src="images/blackfriday.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img class="img-fluid" src="images/saletet.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Các Sản Phẩm</h1>
                        <p>WE WILL ALLWAYS BESIDE YOU.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">TOP Sản Phẩm</button>
                            <button data-filter=".top-featured">Sản Phẩm Mới Nhất</button>
                            <button data-filter=".best-seller">Bán Chạy Nhất</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">NEW</p>
                            </div>
                            <img src="images/giaynew.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Steler Cổ Thấp</h4>
                            <h5> 950.000đ</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Sale</p>
                            </div>
                            <img src="images/cocao.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Boots Cheat ZIP</h4>
                            <h5> 1.500.000đ</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">HOT</p>
                            </div>
                            <img src="images/chukka.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Chukka</h4>
                            <h5> 1.900.000đ</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">HOT</p>
                            </div>
                            <img src="images/giay10.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Dr 1461 FullBlack</h4>
                            <h5> 2.100.000đ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->




    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <?php $mysqli = new mysqli('localhost', 'root', '', 'resign') or die($mysqli->connect_error); ?>

            <?php $result3 = mysqli_query($mysqli, 'SELECT* FROM giayboot') ?>
            <?php while ($rowss = mysqli_fetch_array($result3)) : ?>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="images/<?php echo $rowss['imgsp'] ?>" alt="" />
                        <div class="hov-in">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div><?php endwhile; ?>
        </div>
    </div>
    <!-- End Instagram Feed  -->


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
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">ZaneStore</a> Design By :
            <a href="https://www.facebook.com/">Trần Long</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
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