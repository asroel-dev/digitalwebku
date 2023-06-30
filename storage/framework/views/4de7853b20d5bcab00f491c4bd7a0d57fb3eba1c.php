
<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <form id="kt_project_settings_form" class="form" action="<?php echo e(route('about.update', $data->id_identitas)); ?>"
            method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body p-9">
                <div class="row mb-5">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Image</div>
                    </div>
                    <div class="col-lg-2">
                        <img src="<?php echo e(asset('uploads/foto_pimpinan/' . $data->image)); ?>" class="img-fluid" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url('<?php echo e(asset('uploads/foto_pimpinan/' . $data->image)); ?>')">
                            <div class="image-input-wrapper w-125px h-125px bgi-position-center"
                                style="background-size: 75%; background-image: url('assets/media/svg/brand-logos/volicity-9.svg')">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    </div>
                </div>
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Title</div>
                    </div>
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" value="<?php echo e($data->name); ?>"
                            name="name" />
                    </div>
                </div>
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Description</div>
                    </div>
                    <div class="col-xl-9 fv-row">
                        <textarea name="description" class="form-control form-control-solid h-100px"><?php echo e($data->description); ?></textarea>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Judul</div>
                    </div>
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" value="<?php echo e($data->nama); ?>"
                            name="nama" />
                    </div>
                </div>
                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Deskripsi</div>
                    </div>
                    <div class="col-xl-9 fv-row">
                        <textarea name="deskripsi" class="form-control form-control-solid h-100px"><?php echo e($data->deskripsi); ?></textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Submit</button>
            </div>
        </form>

        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/perkimtan/perkimtan/resources/views/admin/profilwebsite/about.blade.php ENDPATH**/ ?>