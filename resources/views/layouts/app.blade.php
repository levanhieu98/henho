<!DOCTYPE html>
<html lang="en">
<head>
    <title>STU</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- lienhe --}}
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="assets/css/lienhe.css">
    <base href="/frontend/">
    <link rel="shortcut icon" href="img/fav.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">     
</head>
<body>
    <div class="super_container">
        <header class="header">
            @include('layouts.header')          
        </header>
        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container"><div class="menu_close"></div></div>
                <div class="logo menu_logo"><a href="#"><img src="img/fav.png" alt=""></a></div>
                <ul>
                    <li class="menu_item"><a href="/">Trang chủ</a></li>
                    <li class="menu_item"><a href="/blog">Blog</a></li>
                    <li class="menu_item"><a href="/gioithieu">Giới thiệu</a></li>
                    <li class="menu_item"><a href="/lienhe">Liên hệ</a></li>
                    <li class="menu_item"><a href="#" data-toggle="modal" data-target="#myModal">Đăng nhập</a></li>
                    <li class="menu_item"><a href="/register">Đăng ký</a></li>
                </ul>
            </div>
        </div>
        @yield('content')
        <!-- Footer -->
        <footer class="footer">
            @include('layouts.footer')
        </footer>
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-lg-1 order-2  ">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('auth.login')
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/custom.js"></script>
        <script src="plugins/parallax-js-master/parallax.min.js"></script>
        {{--    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script> --}}
        {{--   <script src="js/contact_custom.js"></script> --}}
        <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
        <script src="js/blog_custom.js"></script>
        {{--    <script src="js/single_listing_custom.js"></script> --}}

        <!-- login -->
        @yield('js');
        
        {{--  Lienhe --}}
        <script src="js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
        <script src="js/swipe-content.js"></script> <!-- A Vanilla JavaScript plugin to detect touch interactions -->
        <script src="js/lienhe.js"></script>
    </body>
    </html>