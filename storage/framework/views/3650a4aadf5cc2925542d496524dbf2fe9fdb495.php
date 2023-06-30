
<?php $__env->startSection('content'); ?>

<section class="event-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="event-details__left">
                    <div class="event-details__top">
                        <div class="event-details__date">
                            <p><?php echo e(Carbon\Carbon::now()); ?></p>
                        </div>
                        <h3 class="event-details__title">Daftar Pegawai</h3>
                        <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="event-details__text-1"> <?php echo e($item['nama']); ?> - <?php echo e($item['NJab']); ?> </p>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/perkimtan/perkimtan/resources/views/frontend/pegawai.blade.php ENDPATH**/ ?>