<?php $__env->startSection('content'); ?>

<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Dokumen</li>
            </ul>
            <h2>
            <?php if(request('kategori')): ?>
                Dokumen : <?php echo e($title->name); ?>

            <?php else: ?>
                Semua Dokumen
            <?php endif; ?>
            </h2>
        </div>
    </div>
</section>

<section class="donation">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $dokumen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a target="_blank"  href="<?php echo e(asset('uploads/dokumen/'. $item->file)); ?>"><?php echo e($item->judul); ?></a>
                        </h3>
                        <p class="causes-one__text"><?php echo e($item->detail); ?>.</p>
                        <div class="causes-one__progress">
                            <a target="_blank" href="<?php echo e(asset('uploads/dokumen/'. $item->file)); ?>"> Download File </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Laravel/digitalwebku/resources/views/frontend/dokumen.blade.php ENDPATH**/ ?>