<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$config->title}}</title>
    <meta name="title" content="{{ $metamanagement->meta_title}}">
    <meta name="keywords" content="{{ $metamanagement->meta_keywords}}">
    <meta name="author" content="{{ $metamanagement->meta_author}}">
    <meta name="search engine" content="{{ $metamanagement->meta_search_engine}}">
    <meta name="description" content="{{ $metamanagement->meta_deskripsi}}">
    <meta name="website" content="{{ $metamanagement->meta_website}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('')}}assets/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>


    <!-- TAG PHP -->
    <?php

    use App\Models\Open;

    ?>
    <!-- END TAG PHP -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-4) -->
        <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area top-area-color-white d-none plr--9">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                                    <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower,
                                            NYC</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="{{$config->fb}}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="{{$config->twiter}}" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>

                                                    <li><a href="{{$config->ig}}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="{{$config->youtube}}" title="Youtube"><i class="fab fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black  ltn__logo-right-menu-option plr--9">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{route('index')}}"><img src="{{asset('storage/' . $config->logo)}}" alt="Logo"></a>
                                </div>
                                <div class="get-support clearfix get-support-color-white">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>Get Support</h6>
                                        <h4><a href="https://wa.me/{{$config->wa}}" target="_blank">+62{{$config->no_telp}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column menu-color-white">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="{{route('index')}}">Home</a></li>
                                            <li><a href="{{route('abouts.index')}}">About</a></li>
                                            <li><a href="{{route('products.index')}}">Product</a></li>
                                            <li><a href="{{route('blogs.index')}}">Blog</a></li>
                                            <li><a href="{{route('contacts.index')}}">Contact</a></li>
                                            <li class="special-link"><a href="{{route('contacts.index')}}">GET APPOINTMENT</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="ltn__header-options ltn__header-options-2">
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="{{route('index')}}"><img src="{{asset('')}}assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('abouts.index')}}">About</a></li>
                        <li><a href="{{route('products.index')}}">Product</a></li>
                        <li><a href="{{route('blogs.index')}}">Blog</a></li>
                        <li><a href="{{route('contacts.index')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        @yield('content')


        <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
        <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
            <div class="footer-top-area  section-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-5">
                            <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="{{asset('storage/' . $bgbanner->image_footer)}}">
                                <h6 class="ltn__secondary-color text-uppercase">// time shedule</h6>
                                <h4 class="footer-title">Meet In Timeline.</h4>
                                <?php
                                $opens = Open::limit(7)->get();
                                ?>
                                <ul>
                                    @foreach($opens as $op)
                                    <li>{{$op->hari}} <span>{{$op->jam}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-7">
                            <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                                <h4 class="footer-title">Services.</h4>
                                <div class="footer-menu">
                                    <ul>
                                        @foreach($footer_service as $fs)
                                        <li><a href="{{ route('services.show', $fs->slug)}}">{{$fs->judul}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="footer-widget footer-blog-widget">
                                <h4 class="footer-title">News Feeds.</h4>
                                @foreach($footer_blog as $fb)
                                <div class="ltn__footer-blog-item">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{$fb->tanggal}}
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="ltn__blog-title"><a href="{{ route('blogs.show', $fb->slug)}}">{{$fb->judul}}</a></h4>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{route('index')}}"><img src="{{asset('storage/' . $config->logo)}}" alt="Logo"></a>
                                </div>
                                <div class="get-support ltn__copyright-design clearfix">
                                    <div class="get-support-info">
                                        <h6>Copyright & Design By</h6>
                                        <h4>Wansolution - <span class="current-year"></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->
        <a href="https://wa.me/{{$config->wa}}?text= Membeli Mobil Keluarga dengan kondisi elegan dan baru" class="bg-success rounded-circle px-3 py-1" target="_blank" style="border-radius:50%;background-color:#25D366;position:fixed;z-index:99;bottom:30px;left:30px;"><i class="bi bi-whatsapp text-white" style="font-size:30px;color:#fff;"></i></a>
    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{asset('')}}assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{asset('')}}assets/js/main.js"></script>

</body>

</html>