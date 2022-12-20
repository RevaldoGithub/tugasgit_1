<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}asset/images/logo-2.png" />

    <!-- TITLE -->
    <title>PT.Varis Permata Mulia</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('')}}asset/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('')}}asset/css/style.css" rel="stylesheet" />
    <link href="{{asset('')}}asset/css/dark-style.css" rel="stylesheet" />
    <link href="{{asset('')}}asset/css/transparent-style.css" rel="stylesheet">
    <link href="{{asset('')}}asset/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('')}}asset/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('')}}asset/colors/color1.css" />

    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('')}}asset/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="/dashboard"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="/dashboard">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->

                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">


                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{asset('')}}asset/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::user()->username}} </h5>
                                                        <small class="text-muted">{{ Auth::user()->role}}</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <button class="dropdown-item">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="/dashboard">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('')}}asset/images/logo.png" class="header-brand-img light-logo1" alt="logo" style="width: 115px;">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="/dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Fitur-fitur</h3>
                            </li>
                            @if (auth()->user()->role == 'Operator')

                            @elseif(auth()->user()->role == 'Admin')

                            @elseif(auth()->user()->role == 'Superadmin')
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('slider')" data-bs-toggle="slide" href="{{route('slider.index')}}"><i class="side-menu__icon fa fa-image"></i><span class="side-menu__label">Slider</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('about')" data-bs-toggle="slide" href="{{route('about.index')}}"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">About</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('about')" data-bs-toggle="slide" href="{{route('imageabout.index')}}"><i class="side-menu__icon fa fa-image"></i><span class="side-menu__label">Meta Image About</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('sejarahcompany')" data-bs-toggle="slide" href="{{route('sejarah.index')}}"><i class="side-menu__icon fa fa-trophy"></i><span class="side-menu__label">Award Company</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('product')" data-bs-toggle="slide" href="{{route('product.index')}}"><i class="side-menu__icon fa fa-shopping-bag"></i><span class="side-menu__label">Product</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('kelebihan')" data-bs-toggle="slide" href="{{route('kelebihan.index')}}"><i class="side-menu__icon fa fa-check-square"></i><span class="side-menu__label">Kelebihan</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('kelebihan')" data-bs-toggle="slide" href="{{route('why.index')}}"><i class="side-menu__icon fa fa-check-square"></i><span class="side-menu__label">Why Choose</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('service.index')}}"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Service</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('blog.index')}}"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Blog</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('benefit.index')}}"><i class="side-menu__icon fa fa-line-chart"></i><span class="side-menu__label">Benefit</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('porto.index')}}"><i class="side-menu__icon fa fa-image"></i><span class="side-menu__label">Portfolio</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('price.index')}}"><i class="side-menu__icon fa fa-tags"></i><span class="side-menu__label">Price</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('skill.index')}}"><i class="side-menu__icon fa fa-trophy"></i><span class="side-menu__label">Skill</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('sponsor.index')}}"><i class="side-menu__icon fa fa-handshake-o"></i><span class="side-menu__label">Sponsor</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('team.index')}}"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Team</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('testimonial.index')}}"><i class="side-menu__icon fa fa-wechat"></i><span class="side-menu__label">Testimonial</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('blog')" data-bs-toggle="slide" href="{{route('open.index')}}"><i class="side-menu__icon fa fa-clock-o"></i><span class="side-menu__label">Open</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('contact')" data-bs-toggle="slide" href="{{route('contact.index')}}"><i class="side-menu__icon fa fa-phone-square"></i><span class="side-menu__label">Contact</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Master Kategori</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('kateblog.index')}}"><i class="side-menu__icon fa fa-book"></i><span class="side-menu__label">Kategori Blog</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('katepro.index')}}"><i class="side-menu__icon fa fa-book"></i><span class="side-menu__label">Kategori Product</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('brand')" data-bs-toggle="slide" href="{{route('katewar.index')}}"><i class="side-menu__icon fa fa-book"></i><span class="side-menu__label">Kategori Warna Product</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Configuration</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('bgb')" data-bs-toggle="slide" href="{{route('bgbanner.index')}}"><i class="side-menu__icon fa fa-image"></i><span class="side-menu__label">Background Banner</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('config')" data-bs-toggle="slide" href="{{route('config.index')}}"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">Config</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link  @yield('metamana')" data-bs-toggle="slide" href="{{route('metamanagement.index')}}"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Meta Management</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('akun.index')}}"><i class="side-menu__icon fa fa-user-circle"></i><span class="side-menu__label">User Management</span></a>
                            </li>
                            @endif
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">


                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Aldo</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Wansolution </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('')}}asset/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('')}}asset/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('')}}asset/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('')}}asset/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="{{asset('')}}asset/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('')}}asset/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('')}}asset/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="{{asset('')}}asset/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('')}}asset/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('')}}asset/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{asset('')}}asset/plugins/p-scroll/pscroll.js"></script>
    <script src="{{asset('')}}asset/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('')}}asset/plugins/chart/Chart.bundle.js"></script>
    <script src="{{asset('')}}asset/plugins/chart/rounded-barchart.js"></script>
    <script src="{{asset('')}}asset/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('')}}asset/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('')}}asset/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- DATA TABLE JS-->
    <script src="{{asset('')}}asset/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/jszip.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{asset('')}}asset/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{asset('')}}asset/js/table-data.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('')}}asset/js/apexcharts.js"></script>
    <script src="{{asset('')}}asset/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('')}}asset/plugins/flot/jquery.flot.js"></script>
    <script src="{{asset('')}}asset/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{asset('')}}asset/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="{{asset('')}}asset/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('')}}asset/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('')}}asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('')}}asset/plugins/sidemenu/sidemenu.js"></script>

    <!-- TypeHead js -->
    <script src="{{asset('')}}asset/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="{{asset('')}}asset/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('')}}asset/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset('')}}asset/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('')}}asset/js/custom.js"></script>
</body>

</html>