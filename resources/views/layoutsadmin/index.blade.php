 <!DOCTYPE html>
 <html>

 <head>
    <meta charset="UTF-8">
    <base href="/admin/">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản trị website henhoSTU</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/fav.png">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Vui lòng đợi</p>
        </div>
    </div>

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/admin/home">Quản trị website - henhoSTU</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @include('layoutsadmin.user')
            <!-- #User Info -->
            <!-- Menu -->
            @include('layoutsadmin.menu')
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020<strong>LVH-NBNL</strong>
                </div>

            </div>
            <!-- #Footer -->
        </aside>

    </section>

    <section class="content">
     @yield('content')
 </section>

 <!-- Jquery Core Js -->
 <script src="plugins/jquery/jquery.min.js"></script>

 <!-- Bootstrap Core Js -->
 <script src="plugins/bootstrap/js/bootstrap.js"></script>

 <!-- Select Plugin Js -->
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

 <!-- Slimscroll Plugin Js -->
 <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

 <!-- Waves Effect Plugin Js -->
 <script src="plugins/node-waves/waves.js"></script>

 <!-- Jquery DataTable Plugin Js -->
 <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
 <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
 <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

 <!-- Custom Js -->
 <script src="js/admin.js"></script>
 <script src="js/pages/tables/jquery-datatable.js"></script>

 <!-- Demo Js -->
 <script src="js/demo.js"></script>

 {{-- ckeditor --}}
 <script src="ckeditor/ckeditor.js" type="text/javascript" charset="utf-8" async defer></script>
 <script src="ckfinder/ckfinder.js" type="text/javascript" charset="utf-8" async defer></script>


</body>

</html>