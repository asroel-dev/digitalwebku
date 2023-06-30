
<?php $__env->startSection('content'); ?>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-headerbg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active"> <a href="<?php echo e($data->slug); ?>"><?php echo e($data->judul); ?></a> </li>
            </ul>
        </div>
    </div>
</section>


<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <?php if($data->ext == 'pdf'): ?>
                        <iframe width="100%" height="700px" src="<?php echo e(asset('uploads/foto_statis/' . $data->gambar)); ?>" frameborder="0"></iframe>
                        <?php else: ?>
                        <img src="<?php echo e(asset('uploads/foto_statis/' . $data->gambar)); ?>" alt="">
                        <?php endif; ?>
                        <div class="news-details__date">
                            <p><?php echo e($data->tgl_posting); ?></p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <ul class="list-unstyled news-details__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                            </li>
                        </ul>
                        <h3 class="news-details__title"><?php echo e($data->judul); ?></h3>
                        <p class="news-details__text-1"><?php echo $data->isi_halaman; ?></p>
                    </div>
                    <div class="news-details__bottom">
                        <span class=""> Bagikan postingan ini </span> 

                        <div class="news-details__social-list">
                            <a href="https://api.whatsapp.com/send?text=satpolpp.sulselprov.go.id"><i class="fab fa-whatsapp"></i></a> 
                            <a href="https://www.facebook.com/share.php?u=satpolpp.sulselprov.go.id"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="/berita" class="sidebar__search-form">
                            <input type="search" class="form-control" name="search" value="<?php echo e(request('search')); ?>" type="text" placeholder="Search ..." />
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <div class="sidebar-shape-1"
                            style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                        <h3 class="sidebar__title">Berita Terbaru</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="<?php echo e(asset('uploads/foto_berita/'.$item->gambar)); ?>" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i
                                                class="fas fa-user-circle"></i> By admin</span>
                                        <a href="/berita/<?php echo e($item->slug); ?>"><?php echo e($item->judul); ?></a>
                                    </h3>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/satpol/resources/views/frontend/halaman.blade.php ENDPATH**/ ?>