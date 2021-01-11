 <?php
    $mysqli = new mysqli('localhost', 'root', '', 'resign') or die($mysqli->connect_error);
    $result = mysqli_query($mysqli, 'SELECT*,FORMAT(pricesp,3)  FROM giayboot');
    $number_per_page = 9;
    $number_of_result = mysqli_num_rows($result);
    $number_of_page = ceil($number_of_result / $number_per_page);
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    $page_first_result = ($page - 1) * $number_per_page;
    if (isset($_POST['searchbt'])) {
        $name_search = $_POST['search'];
        $sql = "SELECT* FROM giayboot where namesp='$name_search' or loaisp='$name_search' or nhasxsp='$name_search'";
        mysqli_query($mysqli, $sql);
    } else {
        $sql = "SELECT* FROM giayboot LIMIT $page_first_result, $number_per_page";
    }
    $result_page = mysqli_query($mysqli, $sql);

    ?>
 <?php

    ?>
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


 </head>

 <body>
     <!-- Start Main Top -->
     <div class="main-top">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="custom-select-box">
                         <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                             <option>đ VNĐ</option>
                             <option>$ USD</option>
                             <option>€ EUR</option>
                         </select>
                     </div>
                     <div class="right-phone-box">
                         <p>Call :- <a href="#"> 0933932056</a></p>
                     </div>
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
     <form action="" method="POST" enctype='multipart/form-data'>
         <div class="top-search">
             <div class="container">
                 <div class="input-group">
                     <button class="input-group-addon" type="submit" name="searchbt"><i class="fa fa-search"></i></button>
                     <input type="text" class="form-control" name="search" placeholder="Search">
                     <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                 </div>
             </div>
         </div>
     </form>
     <!-- End Top Search -->

     <!-- Start All Title Box -->
     <div class="all-title-box">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <h2>Shop</h2>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Shop</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- End All Title Box -->


     <!-- Start Shop Page  -->
     <div class="shop-box-inner">
         <div class="container">
             <div class="row">
                 <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                     <div class="right-product-box">
                         <div class="product-item-filter row">
                             <div class="col-12 col-sm-8 text-center text-sm-left">
                                 <div class="toolbar-sorter-right">
                                     <span>Sort by </span>
                                     <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                         <option data-display="Select">Nothing</option>
                                         <option value="2">High Price → High Price</option>
                                         <option value="3">Low Price → High Price</option>
                                     </select>
                                 </div>
                                 <p>Showing all 4 results</p>
                             </div>
                             <div class="col-12 col-sm-4 text-center text-sm-right">
                                 <ul class="nav nav-tabs ml-auto">
                                     <li>
                                         <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                     </li>
                                     <li>
                                         <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>

                         <div class="product-categorie-box">
                             <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                     <div class="row">
                                         <?php while ($row = mysqli_fetch_array($result_page)) { ?> <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                 <div class="products-single fix">
                                                     <div class="box-img-hover">
                                                         <div class="type-lb">
                                                             <p class="sale">HOT</p>
                                                         </div>
                                                         <img src="images/<?php echo $row['imgsp'] ?>" class="img-fluid" alt="Image">
                                                         <div class="mask-icon">
                                                             <ul>
                                                                 <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt xem :' . $row['viewsp'] ?>"><i class="fas fa-eye"></i></a></li>
                                                                 <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt Mua :' . $row['bansp'] ?>"><i class="fa fa-arrow-circle-down"></i></a></li>
                                                                 <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                             </ul>
                                                             <?php $a=$row['viewsp'] ?>
                                                             <a onclick="increment($a);" class="cart" href="shop-detail.php?namesp=<?php echo $row['namesp']?>&loaisp=<?php echo $row['loaisp']?>&viewsp=<?php echo $row['viewsp'] ?>">Add to Cart</a>
                                                         </div>
                                                     </div>
                                                     <div class="why-text">
                                                         <h4><?php echo $row['namesp'] ?></h4>
                                                         <h5 id="number"> <?php $i = $row['pricesp'];
                                                                            echo $o = number_format($i, 0); ?></h5>
                                                     </div>
                                                 </div>
                                             </div> <?php } ?>

                                     </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane fade" id="list-view">
                                     <div class="list-view-box">
                                         <?php $result2 = mysqli_query($mysqli, "SELECT*FROM giayboot LIMIT $page_first_result, $number_per_page") ?>
                                         <?php while ($rowss = mysqli_fetch_array($result2)) : ?>
                                             <div class="row">

                                                 <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                     <div class="products-single fix">
                                                         <div class="box-img-hover">
                                                             <div class="type-lb">
                                                                 <p class="new">HOT</p>
                                                             </div>
                                                             <img src="images/<?php echo $rowss['imgsp'] ?>" class="img-fluid" alt="Image">
                                                             <div class="mask-icon">
                                                                 <ul>
                                                                     <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt xem :' . $rowss['viewsp'] ?>"><i class="fas fa-eye"></i></a></li>
                                                                     <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt Mua :' . $rowss['bansp'] ?>"><i class="fa fa-arrow-circle-down"></i></a></li>
                                                                     <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                 </ul>

                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                     <div class="why-text full-width">
                                                         <h4><?php echo $rowss['namesp'] ?></h4>
                                                         <h5> <?php echo $rowss['pricesp'] . '.Đ' ?></h5>
                                                         <p><?php echo $rowss['motasp'] ?></p>
                                                         <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                     </div>
                                                 </div>
                                             </div><?php endwhile; ?>
                                     </div>
                                 </div>
                             </div>
                             <?php for ($page = 1; $page <= $number_of_page; $page++) {

                                    echo ' <div class="price-box-slider"> 
                                    <a class="btn hvr-hover" style="margin-right:130px;" href = "shop.php?page=' . $page . '">' . $page . ' </a>
                                    </div>';
                                }   ?>
                         </div>
                     </div>
                 </div>


                 <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                     <div class="product-categori">
                         <div class="search-product">
                             <form action="" method="POST" enctype='multipart/form-data'>
                                 <input class="form-control" name="search" placeholder="Search here..." type="text">
                                 <button name="searchbt" type="submit"> <i class="fa fa-search"></i> </button>
                             </form>
                         </div>
                         <div class="filter-sidebar-left">
                             <div class="title-left">
                                 <h3>Menu</h3>



                             </div>
                             <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                 <div class="list-group-collapse sub-men">
                                     <?php $result_sp = mysqli_query($mysqli, 'SELECT COUNT(*) as pricesp FROM giayboot');
                                        $kq = mysqli_fetch_assoc($result_sp);
                                        ?>
                                     <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Sản Phẩm<small class="text-muted"><?php echo '( ' . $kq['pricesp'] . ' )' ?></small>
                                     </a>
                                     <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                         <div class="list-group">
                                             <?php $result_cc = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Giày Cổ Cao"');
                                                $kq_cc = mysqli_fetch_assoc($result_cc);
                                                ?>
                                             <a href="#" name="clickpick1" class="list-group-item list-group-item-action active">Giày Cổ Cao<small class="text-muted"><?php echo '( ' . $kq_cc['loaisp'] . ' )' ?></small></a>
                                             <?php $result_ct = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Giày Cổ Thấp"');
                                                $kq_ct = mysqli_fetch_assoc($result_ct);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Giày Cổ Thấp<small class="text-muted"><?php echo '( ' . $kq_ct['loaisp'] . ' )' ?></small></a>
                                             <?php $result_l = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Giày Lười"');
                                                $kq_l = mysqli_fetch_assoc($result_l);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Giày Lười<small class="text-muted"><?php echo '( ' . $kq_l['loaisp'] . ' )' ?></small></a>
                                             <?php $result_t = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Giày Tây"');
                                                $kq_t = mysqli_fetch_assoc($result_t);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Giày Tây<small class="text-muted"><?php echo '( ' . $kq_t['loaisp'] . ' )' ?></small></a>
                                             <?php $result_vd = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Ví Da"');
                                                $kq_vd = mysqli_fetch_assoc($result_vd);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Ví Da<small class="text-muted"><?php echo '( ' . $kq_vd['loaisp'] . ' )' ?></small></a>
                                             <?php $result_dl = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Dây Lưng"');
                                                $kq_dl = mysqli_fetch_assoc($result_dl);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Dây Lưng<small class="text-muted"><?php echo '( ' . $kq_dl['loaisp'] . ' )' ?></small></a>
                                             <?php $result_v = mysqli_query($mysqli, 'SELECT COUNT(loaisp) as loaisp FROM giayboot where loaisp="Vớ Họa Tiết"');
                                                $kq_v = mysqli_fetch_assoc($result_v);
                                                ?>
                                             <a href="#" name="clickpick" class="list-group-item list-group-item-action">Vớ Họa Tiết<small class="text-muted"><?php echo '( ' . $kq_v['loaisp'] . ' )' ?></small></a>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="filter-price-left">
                             <div class="title-left">
                                 <h3>Price</h3>
                             </div>
                             <div class="price-box-slider">
                                 <div id="slider-range"></div>
                                 <p>
                                     <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                     <button class="btn hvr-hover" type="submit">Filter</button>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Shop Page -->

     <!-- Start Instagram Feed  -->
     <div class="instagram-box">
         <div class="main-instagram owl-carousel owl-theme">
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
         <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
             <a href="https://html.design/">html design</a>
         </p>
     </div>
     <!-- End copyright  -->

     <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
     <script>
         document.getElementById("number").onblur = function() {
             this.value = parseFloat(this.value.replace(/,/g, ""))
                 .toString()
                 .replace(/\B(?=(\d{3})+(?!\d))/g, ",");


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
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.nicescroll.min.js"></script>
     <script src="js/form-validator.min.js"></script>
     <script src="js/contact-form-script.js"></script>
     <script src="js/custom.js"></script>
 </body>

 </html>