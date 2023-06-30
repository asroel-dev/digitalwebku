<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="<?php echo e($profil->deskripsi); ?> " />
    <meta name="keywords" content="<?php echo e($profil->deskripsi); ?>" />

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

    

    <div class="page-wrapper">

        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo" style="">
                                <a href="/"><img height="90px"
                                        src="<?php echo e(asset('uploads/foto_website/' . $profil->image)); ?>"
                                        alt=""></a>
                            </div>
                            
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__right-top">
                                <div class="main-menu__right-top-left">
                                    <div class="main-menu__volunteers">
                                        <div class="main-menu__volunteers-text-box">
                                            <p class="main-menu__volunteers-text">
                                                <a href="">Tegas - <span>Humanis</span></a> - BersihMelayani</p>
                                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu__right-top-right">
                                    <div class="main-menu__right-top-address">
                                        <ul class="list-unstyled main-menu__right-top-address-list">
                                            <li>
                                                <div class="content">
                                                    <p>Telepon/WA</p>
                                                    <h5><a href="tel:<?php echo e($profil->no_telp); ?>"><?php echo e($profil->no_telp); ?></a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="content">
                                                    <p>Email</p>
                                                    <h5><a href="mailto:<?php echo e($profil->email); ?>"><?php echo e($profil->email); ?></a>
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="content">
                                                    <p>Alamat</p>
                                                    <h5><?php echo e($profil->alamat); ?></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__right-top-social">
                                        <?php if($profil->twitter): ?>
                                        <a href="<?php echo e($profil->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if($profil->facebook): ?>
                                            <a href="<?php echo e($profil->facebook); ?>"><i class="fab fa-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if($profil->youtube): ?>
                                            <a href="<?php echo e($profil->youtube); ?>"><i class="fab fa-youtube"></i></a>
                                        <?php endif; ?>
                                        <?php if($profil->instagram): ?>
                                            <a href="<?php echo e($profil->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right-bottom">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">

                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class=" <?php if($d->details->isNotEmpty()): ?> dropdown <?php endif; ?>  ">

                                                <a href="<?php echo e($d->link); ?>">
                                                    <?php echo e($d->name); ?>

                                                </a>
                                                <?php if($d->details->isNotEmpty()): ?>
                                                    <ul>
                                                        <?php $__currentLoopData = $d->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $de): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a href="<?php echo e($de->link); ?>">
                                                                    <?php echo e($de->name); ?>

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
                                        <div class="main-menu__search-box">
                                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu__cat-box">
                                            
                                        </div>
                                        <div class="main-menu__btn-box">
                                            <a href="/admin/login" class="main-menu__btn"> <span class="fa fa-user"></span> Login</a>
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
            <div class="site-footer-bg"
                style="background-image: url(<?php echo e(asset('uploads/foto_website/' . $profil->image_white)); ?>);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href=""><img width="250px"
                                            src="<?php echo e(asset('uploads/foto_website/' . $profil->image_white)); ?>"
                                            alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text mb-5"><?php echo e($profil->deskripsi); ?>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="#">Pemprov Sulsel</a></li>
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
                                <h3 class="footer-widget__title">Informasi</h3>
                                <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                                    <?php $__currentLoopData = $kategori_file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/dokumen?kategori=<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Alamat</h3>
                                <p class="footer-widget__contact-text"><?php echo e($profil->alamat); ?>

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
                                    <?php if($profil->twitter): ?>
                                        <a href="<?php echo e($profil->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if($profil->facebook): ?>
                                        <a href="<?php echo e($profil->facebook); ?>"><i class="fab fa-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if($profil->youtube): ?>
                                        <a href="<?php echo e($profil->youtube); ?>"><i class="fab fa-youtube"></i></a>
                                    <?php endif; ?>
                                    <?php if($profil->instagram): ?>
                                        <a href="<?php echo e($profil->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
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
                                <p class="site-footer__bottom-text">© All Copyright 2023 by <a
                                        href="#"><?php echo e($profil->nama_website); ?></a>
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
                <a href="/" aria-label="logo image"><img
                        src="<?php echo e(asset('uploads/foto_website/' . $profil->image_white)); ?>" width="143"
                        alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo e($profil->email); ?>"><?php echo e($profil->email); ?></a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo e($profil->no_telp); ?>"><?php echo e($profil->no_telp); ?></a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <?php if($profil->twitter): ?>
                    <a href="<?php echo e($profil->twitter); ?>"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if($profil->facebook): ?>
                    <a href="<?php echo e($profil->facebook); ?>"><i class="fab fa-facebook"></i></a>
                    <?php endif; ?>
                    <?php if($profil->youtube): ?>
                    <a href="<?php echo e($profil->youtube); ?>"><i class="fab fa-youtube"></i></a>
                    <?php endif; ?>
                    <?php if($profil->instagram): ?>
                    <a href="<?php echo e($profil->instagram); ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="/berita">
                <label for="search" class="sr-only">Cari Berita Disini</label><!-- /.sr-only -->
                <input type="text" name="search" id="search" placeholder="Cari Berita Disini..." />
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

</html>
<?php /**PATH /Users/asrulramadhan/Laravel/digitalwebku/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>