<!DOCTYPE html>
<html lang="en">
<?php
     $konfigurasi = DB::table('identitas')->first();
?>
<head>
    <base href="">
    <title><?php echo e($konfigurasi->nama_website); ?></title>
    <meta name="description" content="Dinas Koperasi dan UMKM Pemerintah Provinsi Sulawesi Selatan" />
    <meta name="keywords" content="Diskop UMKM Prov Sulsel" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Dinas Koperasi dan UMKM Pemerintah Provinsi Sulawesi Selatan" />
    <meta property="og:url" content="https://Inspektorat-new.sulselprov.go.id/" />
    <meta property="og:site_name" content="Inspektorat" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="icon" href="<?php echo e(asset('assets_panel/image/logo.png')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    
    <link href="<?php echo e(asset('assets_panel/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets_panel/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo e(asset('assets_panel/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"><?php echo $__env->yieldContent('title'); ?></h1>
                                <span class="h-20px border-gray-200 border-start mx-4"></span>
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted text-hover-primary">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo $__env->yieldContent('subtitle'); ?></li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center py-1">
                                <?php echo $__env->yieldContent('button'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-logout" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content rounded">
                <div class="modal-header justify-content-end border-0 pb-0">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Apakah Anda Ingin Keluar ?</h1>
                    </div>
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <form action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets_panel/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_panel/js/scripts.bundle.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets_panel/js/custom/widgets.js')); ?>"></script>
    
    
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="<?php echo e(asset('assets_panel/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH /usr/share/nginx/html/disperkimtan/resources/views/admin/layouts/dashboard.blade.php ENDPATH**/ ?>