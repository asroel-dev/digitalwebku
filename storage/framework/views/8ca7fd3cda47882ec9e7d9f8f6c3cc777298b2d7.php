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
                    <img src="/assets_auth/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                    <img src="/assets_auth/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
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
                <ul class="buy-button list-inline mb-0">
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
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-aboutus-two.html" class="sub-menu-item"> About Us Two </a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-history.html" class="sub-menu-item">History </a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Account </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="account-profile.html" class="sub-menu-item">Profile</a></li>
                                        <li><a href="account-members.html" class="sub-menu-item">Members </a></li>
                                        <li><a href="account-works.html" class="sub-menu-item">Works </a></li>
                                        <li><a href="account-messages.html" class="sub-menu-item">Messages </a></li>
                                        <li><a href="account-chat.html" class="sub-menu-item">Chat </a></li>
                                        <li><a href="account-payments.html" class="sub-menu-item">Payments </a></li>
                                        <li><a href="account-setting.html" class="sub-menu-item">Setting</a></li>
                                        <li><a href="page-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html" class="sub-menu-item">Blog Grid</a></li>
                                        <li><a href="blog-grid-sidebar.html" class="sub-menu-item">Blog with Sidebar</a></li>
                                        <li><a href="blog-list.html" class="sub-menu-item">Blog Listing</a></li>
                                        <li><a href="blog-list-sidebar.html" class="sub-menu-item">Blog List & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                        <li><a href="blog-detail-two.html" class="sub-menu-item">Blog Detail 2 </a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Case Study </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-cases.html" class="sub-menu-item">All Cases </a></li>
                                        <li><a href="page-case-detail.html" class="sub-menu-item">Case Detail </a></li>
                                    </ul>
                                </li>
                                <li><a href="course-detail.html" class="sub-menu-item">Course Detail </a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Login </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                                <li><a href="auth-cover-login.html" class="sub-menu-item">Login Cover</a></li>
                                                <li><a href="auth-login-three.html" class="sub-menu-item">Login Simple</a></li>
                                                <li><a href="auth-bs-login.html" class="sub-menu-item">BS5 Login</a></li>
                                                <li><a href="auth-login-bg-video.html" class="sub-menu-item">Login Five</a></li>
                                            </ul>  
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Signup </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                                <li><a href="auth-cover-signup.html" class="sub-menu-item">Signup Cover</a></li>
                                                <li><a href="auth-signup-three.html" class="sub-menu-item">Signup Simple</a></li>
                                                <li><a href="auth-bs-signup.html" class="sub-menu-item">BS5 Singup</a></li>
                                                <li><a href="auth-signup-bg-video.html" class="sub-menu-item">Singup Five</a></li>
                                            </ul>  
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Reset password </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                                <li><a href="auth-cover-re-password.html" class="sub-menu-item">Reset Password Cover</a></li>
                                                <li><a href="auth-re-password-three.html" class="sub-menu-item">Reset Password Simple</a></li>
                                                <li><a href="auth-bs-reset.html" class="sub-menu-item">BS5 Reset Password</a></li>
                                                <li><a href="auth-reset-password-bg-video.html" class="sub-menu-item">Reset Pass Five</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-comingsoon2.html" class="sub-menu-item">Coming Soon Two</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="page-contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="page-contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                        <li><a href="page-contact-three.html" class="sub-menu-item">Contact Three</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                                <li><a href="footer.html" class="sub-menu-item">Footer Layouts </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
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
                        </li>


                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li>
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