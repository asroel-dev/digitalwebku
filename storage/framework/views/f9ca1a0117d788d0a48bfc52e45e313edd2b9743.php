
<?php $__env->startSection('content'); ?>

<section class="page-header">
  <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/bg_index.jpg)">
  </div>
  <div class="container">
      <div class="page-header__inner">
          <ul class="thm-breadcrumb list-unstyled">
              <li><a href="/">Home</a></li>
              <li><span>/</span></li>
              <li class="active">Pages</li>
          </ul>
          <h2>Gallery</h2>
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
                    <img src="<?php echo e(asset('uploads/foto_galeri/'.$g->gbr_gallery)); ?>" alt="<?php echo e($g->jdl_gallery); ?>" alt="">
                    <a href="<?php echo e(asset('uploads/foto_galeri/'.$g->gbr_gallery)); ?>" alt="<?php echo e($g->jdl_gallery); ?>" class="img-popup"></a>
                    <div class="gallery-page__content">
                        <p class="gallery-page__sub-title"><?php echo e($g->jdl_gallery); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
  </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hallorumahsulsel/perkimtan/resources/views/frontend/galerigambar.blade.php ENDPATH**/ ?>