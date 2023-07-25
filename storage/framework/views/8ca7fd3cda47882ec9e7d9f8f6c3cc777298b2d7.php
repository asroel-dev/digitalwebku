<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="utf-8" />
        <title><?php echo $__env->yieldContent('title'); ?> - Digitalwebku</title>
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
                
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="/" class="sub-menu-item">Home</a></li>
                        <li><a href="/berita" class="sub-menu-item">Blog</a></li>
                        <li><a href="/berita" class="sub-menu-item">Hubungi Kami</a></li>
                        

                        


                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
		<?php echo $__env->yieldContent('content'); ?>
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
<?php /**PATH /Users/asrulramadhan/Laravel/digitalwebku/resources/views/main/layouts/appmain.blade.php ENDPATH**/ ?>