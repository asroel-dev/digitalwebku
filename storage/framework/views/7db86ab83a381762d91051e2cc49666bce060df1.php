
<?php $__env->startSection('content'); ?>
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-two clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(<?php echo e(asset('uploads/foto_banner/' . $b->gambar)); ?>);"></div>
                        <!-- /.image-layer -->

                        
                        

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title"><?php echo e($b->judul); ?></p>
                                        <h2 class="main-slider-two__title"><?php echo e($b->deskripsi); ?></h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="<?php echo e($b->link); ?>" class="thm-btn main-slider-two__btn"> Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>


    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"></span>
                <h2 class="section-title__title">Berita Terbaru
                </h2>
            </div>
            <div class="row">
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <?php if($post->gambar): ?>
                                    <img style="  width: 100%;
                                    height: 200px;
                                    object-fit: cover;" src="<?php echo e(asset('uploads/foto_berita/' . $post->gambar)); ?>" alt="Gambar Berita" />
                                <?php else: ?>
                                    <img src="assets/images/blog/news-1-1.jpg" alt="Tidak ada Gambar">
                                <?php endif; ?>
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="<?php echo e(route('beritapage.detail', $post->judul_seo)); ?>"><i
                                                        class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a
                                                href="<?php echo e(route('beritapage.detail', $post->judul_seo)); ?>"><?php echo e($post->judul); ?></a></h3>
                                                <p class="causes-one__text"><?php echo \Illuminate\Support\Str::limit($post->isi_berita, 160); ?>.</p>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="<?php echo e(route('beritapage.detail', $post->judul_seo)); ?>"> <span
                                                    class="icon-right-arrow"></span> Selengkapnya</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p><?php echo e(tgl_indo($post->tanggal)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1" style="background-image: url(assets/images/shapes/about-one-shape-1.png);">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img height="" src="<?php echo e(asset('uploads/foto_pimpinan/' . $about->image)); ?>" alt="">

                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                            </div>
                            <div class="about-one__shape-4 zoominout">
                                <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Sambutan Dinas</span>
                            <h2 class="section-title__title"><?php echo e($about->nama); ?></h2>
                        </div>
                        <p class="about-one__text"><?php echo e($about->deskripsi); ?> </p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">Dr. Muh. Iqbal S. Suhaeb SE. MTP. <br> Kepala Dinas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/bg_index.jpg);"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png);"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Dinas Perumahan, Kawasan Pemukiman dan Pertanahan</p>
                <h3 class="become-volunteer-one__title">Program Kerja
                </h3>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->

    <section class="events-one">
        <div class="events-one-shape-1" style="background-image: url(assets/images/shapes/events-one-shape-1.png)">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="become-volunteer.html">LAKIP <br>
                                             </a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Laporan Akuntabilitas Kinerja Instansi Pemerintahan</p>
                        <a href="become-volunteer.html" class="thm-btn feature-one__btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="become-volunteer.html">RENSTRA <br>
                                             </a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Rencana Strategis Perangkat Daerah</p>
                        <a href="become-volunteer.html" class="thm-btn feature-one__btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single feature-one__single--two">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="about.html">RENJA</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Rencana Kerja Organisasi Perangkat Daerah.</p>
                        <a href="about.html" class="thm-btn feature-one__btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single feature-one__single--two">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="about.html">IKU</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Indikator Kinerja Utama <br> Dinas Perkimtan Prov Sulsel</p>
                        <a href="about.html" class="thm-btn feature-one__btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Gallery Kegiatan</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="gallery-one__container">
                <ul class="list-unstyled gallery-one__list">
                    <?php $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img">
                            <img style="
                                max-width: 400px;
                                height: 300px;
                                object-fit: cover;
                                " src="/uploads/foto_galeri/<?php echo e($item->gbr_gallery); ?>" alt="">
                            <a href="/uploads/foto_galeri/<?php echo e($item->gbr_gallery); ?>" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title"><?php echo e($item->jdl_gallery); ?></p>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="become-volunteer-one__inner">
                <div class="become-volunteer-one__btn-box">
                    <a href="become-volunteer.html" class="thm-btn become-volunteer-one__btn">Selengkapnya</a>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script type="text/javascript">
        window.onload = () => {
            $('#onload').modal('show');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/perkimtan/perkimtan/resources/views/frontend/index.blade.php ENDPATH**/ ?>