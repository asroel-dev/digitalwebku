
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title><?php echo e($profil->nama_website); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo e($profil->nama_website); ?>" />
        <meta name="keywords" content="<?php echo e($profil->nama_website); ?>" />
        <meta name="author" content="<?php echo e($profil->nama_website); ?>" />
        <meta name="email" content="<?php echo e($profil->email); ?>" />
        <meta name="website" content="<?php echo e($profil->nama_website); ?>" />
        <meta name="Version" content="v4.4.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('uploads/foto_website/' . $profil->favicon)); ?>" />
        
        <!-- Css -->
        <!-- Bootstrap Css -->
        <link href="/assets_auth/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets_auth/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets_auth/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
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
        
        
        <div class="back-to-home">
            <a href="" class="back-button btn btn-icon btn-primary"><i data-feather="arrow-left" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="cover-user">
            <div class="container-fluid px-0">
                <div class="row g-0 position-relative">
                    <div class="col-lg-4 cover-my-30 order-2">
                        <div class="cover-user-img d-flex align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card login-page border-0" style="z-index: 1">
                                        <div class="card-body p-0">
                                            <div class="main-menu__logo mb-5" style="">
                                                <a href="/"><img height="90px"
                                                        src="<?php echo e(asset('uploads/foto_website/' . $profil->image)); ?>"
                                                        alt=""></a>
                                            </div>
                                            <h4 class="card-title text-center">Login</h4>  
                                            <form class="login-form mt-4" method="POST" action="<?php echo e(route('login')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
        
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                                <input type="password" class="form-control ps-5" name="password" placeholder="Password" required="">
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
        
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-lg-12 mb-0">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary">Sign in</button>
                                                        </div>
                                                    </div><!--end col-->


                                                    <div class="col-12 text-center">
                                                        
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div> <!-- end about detail -->
                    </div> <!-- end col -->    

                    <div class="col-lg-8 offset-lg-4 padding-less img order-1 jarallax" data-jarallax data-speed="0.5" style="background-image:url('<?php echo e(asset('uploads/foto_website/'.$profil->image_login)); ?>')"></div><!-- end col -->    
                </div><!--end row-->
            </div><!--end container fluid-->
        </section><!--end section-->
        <script src="/assets_auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Main Js -->
        <script src="/assets_auth/libs/feather-icons/feather.min.js"></script>
        <script src="/assets_auth/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="/assets_auth/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html><?php /**PATH /Users/asrulramadhan/Sites/satpol/resources/views/auth/login.blade.php ENDPATH**/ ?>