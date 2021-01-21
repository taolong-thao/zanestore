<?php
require './fbconfig.php';
$mysqli = new mysqli('localhost', 'root', '', 'resign') or die($mysqli->connect_error);

if (isset($_GET['namesp']) && isset($_GET['imgsp']) && isset($_GET['pricesp']) && isset($_POST['soluongsp'])) {
    $loaisp = $_GET['loaisp'];
    $viewsp = $_GET['viewsp'];
    $namesp = $_GET['namesp'];
    $imgsp = $_GET['imgsp'];
    $pricesp = $_GET['pricesp'];
    $soluongsp = $_POST['soluongsp'];
    $total = $pricesp * $soluongsp;
    $username = $_SESSION['username'];
    var_dump($username);
    mysqli_query($mysqli, "INSERT INTO `cart`(`username`,  `namesp`, `imgsp`, `pricesp`, `soluongsp`, `total`) VALUES ('$username','$namesp','$imgsp','$pricesp','$soluongsp','$total')");
    $temp = 'Location: shop-detail.php?namesp=' . $namesp . '&loaisp=' . $loaisp . '&viewsp=' . $viewsp;
    header($temp);
    exit();
}


$name = $_GET['namesp'];
$sql = "SELECT * FROM giayboot where namesp='$name'";
$theloai = $_GET['loaisp'];
$temp = "SELECT * FROM giayboot Where loaisp='$theloai'";
$viewsp = $_GET['viewsp'] + 1;
mysqli_query($mysqli, "UPDATE giayboot SET viewsp='$viewsp' WHERE namesp='$name'");
$spkhac = mysqli_query($mysqli, $temp);
$result = mysqli_query($mysqli, $sql);


include 'header.php'
?>

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div name="imgsp" class="carousel-item active"> <img class="d-block w-100" src="images/<?php echo $row['imgsp'] ?>" alt="First slide"> </div>
                                <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-02.jpg" alt="Second slide"> </div>
                                <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-03.jpg" alt="Third slide"> </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="1">
                                    <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="2">
                                    <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                                </li>
                            </ol>
                        </div>
                    </div>
                    <form enctype='multipart/form-data' action="shop-detail.php?namesp=<?php echo $row['namesp']; ?>&pricesp=<?php echo $row['pricesp']; ?>&imgsp=<?php echo $row['imgsp']; ?>&loaisp=<?php echo $row['loaisp']; ?>&viewsp=<?php echo $row['viewsp']; ?>" method="POST">

                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2 name="namesp"><?php echo $row['namesp'] ?> </h2>
                                </h2>
                                <h5><?php $i = $row['pricesp'];
                                    echo $o = number_format($i, 0); ?></h5>
                                <p class="available-stock"><span> More than 20 available / <a href="#">8 sold </a></span>
                                <p>
                                <h4>Mô Tả Sản Phẩm:</h4>
                                <p><?php echo $row['motasp'] ?>. </p>
                                <ul>
                                    <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Số Lượng:</label>
                                            <input name="soluongsp" id="soluongsp" class="form-control" value="0" min="0" max="20" type="number">
                                        </div>
                                    </li>
                                </ul>

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <button class="btn hvr-hover submit" data-fancybox-close="">Add to cart</button>
                                    </div>
                                </div>



                                <div class="add-to-btn">
                                    <div class="add-comp">
                                        <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>
                                        <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Add to Compare</a>
                                    </div>
                                    <div class="share-bar">
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><?php } ?>


            <div class="row my-5">
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        <h2>Product Reviews</h2>
                    </div>
                    <div class="card-body">
                        <div class="media mb-3">
                            <div class="mr-2">
                                <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                                <small class="text-muted">Posted by Anonymous on 3/1/18</small>
                            </div>
                        </div>
                        <hr>
                        <div class="media mb-3">
                            <div class="mr-2">
                                <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                                <small class="text-muted">Posted by Anonymous on 3/1/18</small>
                            </div>
                        </div>
                        <hr>
                        <div class="media mb-3">
                            <div class="mr-2">
                                <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                                <small class="text-muted">Posted by Anonymous on 3/1/18</small>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class="btn hvr-hover">Leave a Review</a>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Các Sản Phẩm Cùng Loại</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme"><?php while ($row = mysqli_fetch_array($spkhac)) { ?>
                            <div class="item">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <img src="images/<?php echo $row['imgsp'] ?>" class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt xem :' . $row['viewsp'] ?>"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo 'Số lượt Mua :' . $row['bansp'] ?>"><i class="fa fa-arrow-circle-down"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <a class="cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4><?php echo $row['namesp'] ?></h4>
                                        <h5 id="number"> <?php echo $row['pricesp'] . '.Đ' ?></h5>
                                    </div>
                                </div>
                            </div><?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

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