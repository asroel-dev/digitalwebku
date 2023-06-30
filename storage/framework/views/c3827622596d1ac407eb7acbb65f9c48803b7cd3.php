<!DOCTYPE html>
<html lang="en">

<?php
        $profil = DB::table('identitas')->first();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Pasti Beraksi 2023 </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Pasti Beraksi 2023 " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/oxpins-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/oxpins.css" />
    <link rel="stylesheet" href="/assets/css/oxpins-responsive.css" />
</head>

<body class="custom-cursor">

    
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo" style="">
                                <a  href="/"><img  height="90px" src="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__right-top">
                                <div class="main-menu__right-top-left">
                                    <div class="main-menu__volunteers">
                                            <img src="/assets/images/logo-1.png" alt="" style="padding-right: 30px" height="50px">
                                        <div class="main-menu__volunteers-text-box">
                                            <p class="main-menu__volunteers-text"><a href="become-volunteer.html">Pemerintah Provinsi
                                                    
                                                    <span>Sulawesi Selatan</span></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu__right-top-right">
                                    <div class="main-menu__right-top-address">
                                        <ul class="list-unstyled main-menu__right-top-address-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Telepon/WA</p>
                                                    <h5><a href="tel:980009630"><?php echo e($profil->no_telp); ?></a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Email</p>
                                                    <h5><a href="mailto:<?php echo e($profil->email); ?>"><?php echo e($profil->email); ?></a>
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-location"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Sekertariat</p>
                                                    <h5><?php echo e($profil->keterangan); ?></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__right-top-social">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right-bottom">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">

                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class=" <?php if($d->detail->isNotEmpty()): ?> dropdown <?php endif; ?>  ">
                                               
                                                <a href="<?php echo e($d->link); ?>">
                                                    <?php echo e($d->nama_group_menu_id); ?>

                                                </a>
                                                <?php if($d->detail->isNotEmpty()): ?>
                                                    <ul>
                                                        <?php $__currentLoopData = $d->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $de): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a  href="<?php echo e($de->link); ?>">
                                                                    <?php echo e($de->nama); ?> 
                                                                </a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                                <div class="main-menu__main-menu-content-box">
                                    <div class="main-menu__search-cat-btn-box">
                                        
                                        <div class="main-menu__btn-box">
                                            <a href="/admin-panel/login" class="main-menu__btn"> 
                                                <span
                                                    class="fa fa-sign-in"></span> Admin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

       <?php echo $__env->yieldContent('content'); ?>

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(/assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img width="250px" src="/assets/images/logo-white.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text mb-5"><?php echo e($profil->meta_deskripsi); ?>.</p>
                                    <img src="/assets/images/logo-2.png" alt="" style="" height="50px">
                                    <img src="/assets/images/logo-3.png" alt="" style="" height="50px">
                                    <img src="/assets/images/logo-4.png" alt="" style="" height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Kontak</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Informasi dan Pengaduan</a></li>
                                    <li><a href="/berita">Berita</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__non-profit clearfix">
                                <h3 class="footer-widget__title">Links Dukungan</h3>
                                <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                                    <li><a href="#">Unicef Indonesia</a></li>
                                    <li><a href="#">Bappenas</a></li>
                                    <li><a href="#">Kemendesa</a></li>
                                    <li><a href="#">Sulselprov</a></li>
                                    <li><a href="#">Bappeda Prov. Sulsel</a></li>
                                    <li><a href="#">Dinas Pendidikan Prov. Sulsel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Alamat</h3>
                                <p class="footer-widget__contact-text"><?php echo e($profil->keterangan); ?>

                                </p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:<?php echo e($profil->email); ?> "><?php echo e($profil->email); ?></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:<?php echo e($profil->no_telp); ?> "><?php echo e($profil->no_telp); ?> </a></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="site-footer__social">
                                    <a href="<?php echo e($profil->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo e($profil->facebook); ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?php echo e($profil->youtube); ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo e($profil->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="#">Pasti Beraksi</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" width="143"
                        alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:pastiberaksi@sulselprov.go.id">pastiberaksi@sulselprov.go.id</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo e($profil->no_telp); ?>"><?php echo e($profil->no_telp); ?></a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/timepicker/timePicker.js"></script>
    <script src="/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="/assets/js/oxpins.js"></script>
</body>

</html><?php /**PATH /Users/asrulramadhan/Sites/sipbm-new/pastiberaksi/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>