<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Trang cá nhân</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="{{'frontend/'.Auth::user()->img}}" alt="" class="img-fluid rounded-circle">
        <div class="form-inline">
          <h1 class="text-light col-10 "><a href="index.html">{{Auth::user()->name}}</a></h1>
          <div class="dropdown col-2">
            <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="caret "></span></button>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="bx bx-user mr-50"></i>Sửa thông tin</a></li>
                <li><a href="/doimatkhau"><i class=" bx bx-hive mr-50"></i>Đổi mật khẩu</a></li>
                <li class="divider"></li>
                <li><a href="/logout"><i class="bx bx-power-off mr-50"></i>Đăng xuất</a></li>  
              </ul>
            </div>
          </div>
        </div>
        <nav class="nav-menu">
          <ul>
            <li><a href="/trangchu"><i class="bx bx-home"></i> <span>Trang chủ</span></a></li>
            <li><a href="/canhan"><i class="bx bx-user"></i> <span>Trang cá nhân</span></a></li>
            <li><a href="/banbe"><i class="bx bx-group"></i> <span>Bạn bè</span></a></li>
            <li><a href="/messages"><i class="bx bxs-message-rounded-dots"></i> <span>Messages</span></a></li>
            <li><a href="/thuvienanh"><i class="bx bx-photo-album"></i>Thư viện ảnh</a></li>
            <li><a href="/status"><i class="bx bx-edit"></i> Status</a></li>  
            <li><a href="/caidat"><i class="bx bx-cog"></i>Cài đặt</a></li>  
          </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

      </div>
    </header><!-- End Header -->

  

    <main id="main">
     @yield('content')

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
 

  {{-- pusher_chat --}}
 <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @yield('js');
</body>

</html>