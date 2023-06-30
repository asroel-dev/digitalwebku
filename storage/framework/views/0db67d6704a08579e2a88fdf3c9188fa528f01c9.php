
<?php $__env->startSection('content'); ?>

<section class="page-header">
  <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/bg_indx.jpg)">
  </div>
  <div class="container">
      <div class="page-header__inner">
          <ul class="thm-breadcrumb list-unstyled">
              <li><a href="/">Home</a></li>
              <li><span>/</span></li>
              <li class="active">Pages</li>
          </ul>
          <h2>Galeri</h2>
      </div>
  </div>
</section>

<section class="gallery-page">
  <div class="container">
      <div class="row">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="gallery-page__single">
                <div class="gallery-page__img">
                    <img height="250px" src="<?php echo e(asset('uploads/foto_galeri/'.$g->gambar)); ?>" alt="<?php echo e($g->judul); ?>" alt="">
                    <a href="<?php echo e(asset('uploads/foto_galeri/'.$g->gambar)); ?>" alt="<?php echo e($g->judul); ?>" class="img-popup"></a>
                    <div class="gallery-page__content">
                        <p class="gallery-page__sub-title"><?php echo e($g->judul); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
  </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/satpol/resources/views/frontend/galerigambar.blade.php ENDPATH**/ ?>