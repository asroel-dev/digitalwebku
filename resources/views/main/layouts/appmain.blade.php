<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="utf-8" />
        <title>@yield('title') - Digitalwebku</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Digital Webku adalah layanan web gratis" />
        <meta name="keywords" content="digital, webku, gratis, layanan, digitalwebku, Website Digital" />
        <meta name="author" content="Asrul Ramadhan" />
        <meta name="email" content="asroel.dev@gmail.com" />
        <meta name="website" content="https://digitalwebku.com" />
        <meta name="Version" content="v1.0.0" />
        <link rel="shortcut icon" href="/assets_auth/images/favicon.ico" />
        <link href="/assets_auth/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="/assets_auth/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="/assets_auth/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <link href="/assets_auth/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets_auth/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link href="/assets_auth/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
    </head>

	<body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        
        
        <!-- Navbar Start -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="/assets/images/logo-digiweb.png" height="40" class="logo-light-mode" alt="">
                    <img src="/assets/images/logo-digiweb.png" height="40" class="logo-dark-mode" alt="">
                </a>                
                <!-- Logo End -->

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Login button Start-->
                {{-- <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>
            
                    <li class="list-inline-item ps-1 mb-0">
                        <a href="https://1.envato.market/landrick" target="_blank">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart" class="fea icon-sm"></i></div>
                        </a>
                    </li>
                </ul> --}}
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="/" class="sub-menu-item">Home</a></li>
                        <li><a href="/berita" class="sub-menu-item">Blog</a></li>
                        <li><a href="/berita" class="sub-menu-item">Hubungi Kami</a></li>
                        {{-- <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li> --}}

                        {{-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Template</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-corporate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/corporate.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Corporate</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-crypto.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/crypto.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Cryptocurrency</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-real-estate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/real.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Real Estate</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-shop.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/shop.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Shop</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-portfolio.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/portfolio.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Portfolio</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-photography.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/photography.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Photography <span class="badge bg-success ms-2">New</span></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="helpcenter-overview.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/help-center.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Help Center</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-hosting.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/hosting.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Hosting & Domain</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-job.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/job.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Job & Career</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forums.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/forums.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Forums</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-blog.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/blog.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Blog</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-nft.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="/assets_auth/images/demos/nft.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">NFT Marketplace</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}


                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
		@yield('content')
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- Javascript -->
        <!-- JAVASCRIPT -->
        <script src="/assets_auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="/assets_auth/libs/tiny-slider/min/tiny-slider.js"></script>
        <!-- Lightbox -->
        <script src="/assets_auth/libs/tobii/js/tobii.min.js"></script>
        <!-- Main Js -->
        <script src="/assets_auth/libs/feather-icons/feather.min.js"></script>
        <script src="/assets_auth/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="/assets_auth/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>

</html>
