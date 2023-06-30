
<?php $__env->startSection('title','Pages'); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="<?php echo e(route('halamanstatis.create')); ?>" class="btn btn-primary btn-sm">+ Add Pages</a>
                <table id="tableStatis" class="table table-hover display" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Title</th>
                            <th>Link</th>
                            <th>Created At</th>
                            <th>Authors</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                </table>
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
            $('#tableStatis').DataTable({
                "pageLength": 10,
                "processing": true,
                "serverside": true,
                "scrollX": true,
                "language": {
                    "processing": 'Memuat...'
                },
                "serverSide": true,
                "ajax": {
                    url: "<?php echo e(route('halamanstatis.index')); ?>",
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
                        "data": "link"
                    },
                    {
                        "data": "tgl_posting"
                    },
                    {
                        "data": "username"
                    },
                    {
                        "data": "aksi",
                        "orderable": false,
                        "searchable": false
                    },
                ],
                "bAutoWidth": false,
                "columnDefs": [{
                    targets: [0, 1, 2, 3, 4],
                    className: 'text-center'
                }],
                "bDestroy": true,
            });
        }

    });


    function alertHapus(id) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus Halaman",
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
            url: "<?php echo e(route('halamanstatis.destroy')); ?>",
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
                }, 2000);
            },
            error: function() {}
        })
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/asrulramadhan/Sites/satpol/resources/views/admin/halamanstatis/index.blade.php ENDPATH**/ ?>