
<?php $__env->startSection('title','Dokumen'); ?>
<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="card">
    <div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary btn-sm mb-5" data-bs-toggle="modal" data-bs-target="#tambahAplikasi">+ Tambah Dokumen</button>
                <table id="tableAplikasi" class="table table-hover display" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Judul</th>
                            <th class="text-left">Kategori Dokumen</th>
                            <th class="text-left">Detail</th>
                            <th class="text-left">File</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahAplikasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xharga="http://www.w3.org/1999/xharga" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form method="POST" class="form" action="<?php echo e(route('dokumen.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Tambah </h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Judul"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Judul" name="judul" required />
                    </div>
                    <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="">Deskripsi </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Detail"></i>
                        </label>
                        <textarea type="text" class="form-control form-control-solid" placeholder="Masukkan Detail" name="detail" ></textarea>
                    </div>
                    <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kategori File</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kategori File"></i>
                        </label>
                        <select class="form-control" name="kategori_id" required>
                            <option value="">Pilih Kategori</option>
                            <?php $__currentLoopData = $kategori_file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">File</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Gambar"></i>
                        </label>
                        <input type="file" class="form-control form-control-solid" placeholder="Masukkan Gambar"  name="file" required />
                    </div>
                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editAplikasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xharga="http://www.w3.org/1999/xharga" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form class="form" action="<?php echo e(route('dokumen.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Data </h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Judul"></i>
                        </label>
                        <input type="hidden" class="form-control form-control-solid" id="idEdit" placeholder="Masukkan Judul" name="id" required />
                        <input type="text" class="form-control form-control-solid" id="judulEdit" placeholder="Masukkan Judul" name="judul" required />
                    </div>
                    
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Detail </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Detail"></i>
                        </label>
                        <textarea type="text" class="form-control form-control-solid" placeholder="Masukkan Detail" id="detailEdit" name="detail" ></textarea>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kategori File</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kategori File"></i>
                        </label>
                        <select class="form-control" id="kategoriEdit" name="kategori_id" required>
                            <option value="">Pilih Kategori</option>
                            <?php $__currentLoopData = $kategori_file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">File</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Gambar"></i>
                        </label>
                        
                        <input type="file" class="form-control form-control-solid" placeholder="Masukkan Gambar" id="gambarEdit" name="image" />
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        load_data();

        function load_data(unit = '') {
            $('#tableAplikasi').DataTable({
                "pageLength": 10,
                "processing": true,
                "serverside": true,
                "scrollX": true,
                "language": {
                    "processing": 'Memuat...'
                },
                "serverSide": true,
                "ajax": {
                    url: "<?php echo e(route('dokumen.index')); ?>",
                    data: {
                        unit: unit,
                    }
                },
                "columns": [{
                        "data": "DT_RowIndex",
                        "orderable": false,
                        "searchable": false
                    },
                    {
                        "data": "judul"
                    },
                    {
                        "data": "kategori_id"
                    },
                    {
                        "data": "detail"
                    },
                    {
                        "data": "gambar"
                    },
                    {
                        "data": "aksi",
                        "orderable": false,
                        "searchable": false
                    },
                ],
                "bAutoWidth": false,
                "columnDefs": [{
                    targets: [0, 1, 2],
                    className: 'text-center'
                }],
                "bDestroy": true,
            });
        }

    });

    function editData(id) {
        var _token = "<?php echo e(csrf_token()); ?>";
        $.ajax({
            url: "<?php echo e(route('dokumen.edit')); ?>",
            method: "POST",
            data: {
                _token: _token,
                id: id
            },
            success: function(data) {
                console.log(data);
                $('#idEdit').val(data.id);
                $('#judulEdit').val(data.judul);
                $('#kategoriEdit').val(data.kategori_id);
                $('#detailEdit').val(data.detail);

            },
            error: function() {}
        })
    }

    function alertHapus(id) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya'
        }).then((result) => {
            if (result.isConfirmed) {
                hapus(id);
            }
        })
    }

    function hapus(id) {
        var _token = "<?php echo e(csrf_token()); ?>";
        $.ajax({
            url: "<?php echo e(route('dokumen.destroy')); ?>",
            method: "POST",
            data: {
                _token: _token,
                id: id
            },
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon Tunggu',
                    icon: 'warning',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            },
            success: function(data) {
                console.log(data);
                Swal.fire({
                    title: 'Success',
                    text: data.message,
                    icon: 'success',
                });
                setTimeout(() => {
                    location.reload()
                }, 1000);
            },
            error: function() {}
        })
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                $('#preview').show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#gambarEdit").change(function() {
        readURL(this);
    });

    $("#gambar").change(function() {
        readURL(this);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Laravel/digitalwebku/resources/views/admin/dokumen/index.blade.php ENDPATH**/ ?>