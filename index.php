<?php
ob_start();
session_start();
include_once './cauhinh/ketnoi.php';
?>﻿

<html>
<head><title>Vietpro Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'danhsachtimkiem':
                echo '<link rel="stylesheet" href="css/danhsachtimkiem.css">';
                break;
            case 'danhsachsp':
                echo '<link rel="stylesheet" href="css/danhsachsp.css">';
                break;
            case 'chitietsp':
                echo '<link rel="stylesheet" href="css/chitietsp.css">';
                break;
            case 'giohang':
                echo '<link rel="stylesheet" href="css/giohang.css">';
                break;
            case 'muahang':
                echo '<link rel="stylesheet" href="css/muahang.css">';
                break;
            case 'hoanthanh':
                echo '<link rel="stylesheet" href="css/hoanthanh.css">';
                break;
        }
    }
    ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1444052702393220&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-md-2 col-sm-6 col-lg-3">
                    <h1>
                        <a href="index.php">
                            <figure>
                                <img src="images/logo.png" alt="">
                            </figure>
                        </a>
                    </h1>
                </div>
                <!-- End logo -->
                <!-- top middle tim kiếm -->
                <?php
                include_once './chucnang/timkiem/timkiem.php';
                ?>
                <!-- End search -->
                <!-- địa chỉ -->
                <div id="cus">
                    <p>78-80 Hoàng Hoa Thám, Phường 12, Quận Tân Bình, TP HCM</p>
                </div>
            </div>
            <!-- End top middle -->
            <!-- top right -->
            <div id="top-right" class="col-lg-4 col-md-5 col-sm-12">
                <div id="top-icon">
                    <ul>
                        <li>
                            <?php
                            include_once './chucnang/giohang/giohangcuaban.php';
                            ?>
                        </li>
                        <!-- End thẻ cart -->
                        <li>
                            <img src="images/trahang.png" alt="">
                            Giao Hàng <br>
                            <span>Toàn Quốc</span>
                        </li>
                        <li>
                            <img src="images/trahang.png" alt="">
                            HỔ TRỢ
                            <br>
                            <span>Nâng cấp</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End top right -->
        </div>
    </div>
    <!-- end div container -->
</div>
<!-- End Header -->

<!-- Banner  -->


<!-- Body -->
<div id="body">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <?php
            include_once './chucnang/sanpham/danhmucsp.php';
            include_once './chucnang/quangcao/quangcao.php';

            ?>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <?php
            include_once './chucnang/slideshow/slideshow.php';
            ?>

            <div id="main">
                <?php
                //mater page
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'danhsachtimkiem':
                            include_once './chucnang/timkiem/danhsachtimkiem.php';
                            break;
                        case 'danhsachsp':
                            include_once './chucnang/sanpham/danhsachsp.php';
                            break;
                        case 'chitietsp':
                            include_once './chucnang/sanpham/chitietsp.php';
                            break;
                        case 'giohang':
                            include_once './chucnang/giohang/giohang.php';
                            break;
                        case 'muahang':
                            include_once './chucnang/giohang/muahang.php';
                            break;
                        case 'hoanthanh':
                            include_once './chucnang/giohang/hoanthanh.php';
                            break;
                    }
                } else {
                    include_once './chucnang/sanpham/sanpham.php';
                }
                ?>
            </div>


        </div>
    </div>
</div>
<!-- End Body -->
<footer id="footer" style="background: none;">
    <div class="footer-container">
        <div class="container">
            <div class="top" style="width: 110%">
                <div class="row">
                    <div class="box  col-md-3 col-12 col-lg-3">
                        <div class="icon center-block">
                            <img src="images/delivery.png" alt="" class="img-responsive">
                        </div>
                        <div class="text">
                            <h2 style="color:#000; font-size: 16px;"><b>Free Delivery</b></h2>
                            <p>And free returns. See checkout for delivery dates.</p>
                        </div>
                    </div>
                    <div class="box  col-md-3 col-12 col-lg-3">
                        <div class="icon center-block">
                            <img src="images/pay.png" alt="" class="img-responsive">
                        </div>
                        <div class="text">
                            <h2 style="color:#000; font-size: 16px;"><b>Safe Payment</b></h2>
                            <p>Pay with the world's most popular and secure payment methods.</p>
                        </div>
                    </div>
                    <div class="box  col-md-3 col-12 col-lg-3">
                        <div class="icon center-block">
                            <img src="images/heart.png" alt="" class="img-responsive">
                        </div>
                        <div class="text">
                            <h2 style="color:#000; font-size: 16px;"><b>Shop with Confidence</b></h2>
                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                        </div>
                    </div>
                    <div class="box  col-md-3 col-12 col-lg-3">
                        <div class="icon center-block">
                            <img src="images/heart.png" alt="" class="img-responsive">
                        </div>
                        <div class="text">
                            <h2 style="color:#000; font-size: 16px;"><b>24/7 Help Center</b></h2>
                            <p>Have a question? Call a Specialist or chat online.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- footer main -->

        <div class="footer-main">
            <div class="container ">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12" style="">
                        <div class="col-xs-12 col-md-12 col-lg-5">
                            <div class="footer_logo"><img src="images/logo_footer.png" class="img-responsive" alt="">
                                <p id="sub-logo" style="margin-top: 17px">We are a team of designers and developers that
                                    create high quality Magento, Prestashop, Opencart [...].</p>
                            </div>
                            <div class="cus">
                                <p class="text1"><span>Address: </span>6688Princess Road, London, Greater London BAS
                                    23JK, UK</p>
                                <p class="text2"><span>Phone: </span> (012) 800 456 789-987</p>
                                <p class="text3"><span>Email: </span> Demo@posthemes.com</p>
                            </div>
                        </div>
                        <div class=" box1 col-xs-12 col-md-6 col-lg-3 links footer_block">
                            <h3 style="font-weight: 30px; color: #000;"><b>Product</b></h3>
                            <p style="font-size: 13px">Prices drop</p>
                            <p style="font-size: 13px">New Product</p>
                            <p style="font-size: 13px">Best Sales</p>
                            <p style="font-size: 13px">Contact Us</p>
                        </div>
                        <div class=" box1 col-xs-12 col-md-6 col-lg-3 links footer_block">
                            <h3 style="font-weight: 30px; color: #000;"><b>Our Company</b></h3>
                            <p style="font-size: 13px">Delivery</p>
                            <p style="font-size: 13px">Legal Notice</p>
                            <p style="font-size: 13px">About Us</p>
                            <p style="font-size: 13px">Contact US</p>
                            <p style="font-size: 13px">Site Map</p>
                        </div>
                        <div class=" box2 col-xs-6 col-md-6 col-lg-5 ">
                            <h3 style="color: #000;"><b>Follow Us</b></h3>
                            <ul class="link-follow">
                                <li class="first"><a class="twitter fab fa-twitter" style="font-size: 20px"
                                                     title="Twitter" href="#"><span></span></a></li>
                                <li><a class="google fab fa-google-plus" style="font-size: 20px" title="Google"
                                       href="#"><span> </span></a></li>
                                <li><a class="facebook fab fa-facebook" style="font-size: 15px" title="Facebook"
                                       href="#"><span> </span></a></li>
                                <li><a class="youtube fab fa-youtube" style="font-size: 15px" title="Youtube"
                                       href="#"><span>  </span></a></li>
                                <li><a class="instagram fab fa-instagram" style="font-size: 15px" title="Youtube"
                                       href="#"><span> </span></a></li>
                            </ul>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer -->


<!-- End Footer -->
</div>
</body>
</html>