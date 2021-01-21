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
                              </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="login-box">
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
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="cart.php">
                                <i class="fa fa-shopping-bag"></i>
                                <p>My Cart</p>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            
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
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>