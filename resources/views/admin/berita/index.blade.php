@extends('admin.layouts.dashboard')
@section('title', 'News and Article')
@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-title">
                  
                </div>

                <div class="card-body">
                    {{-- <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">...</span>
                        <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                            placeholder="Search Report" />
                    </div> --}}
                    <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm mb-5">+ Tambah Berita</a>
                    <table id="tableBerita" class="table table-striped table-row-bordered gy-5 gs-7 border rounded"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-left">Gambar</th>
                                <th class="text-left">Judul</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Read</th>
                                <th>Date Created</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            load_data();

            function load_data(unit = '') {
                $('#tableBerita').DataTable({
                    "pageLength": 10,
                    "searching": true,
                    "processing": true,
                    "serverside": true,
                    "scrollX": true,
                    "language": {
                        "processing": 'Memuat...'
                    },
                    "serverSide": true,
                    "ajax": {
                        url: "{{ route('berita.index') }}",
                    },
                    "columns": [{
                            "data": "DT_RowIndex",
                            "orderable": false,
                            "searchable": false
                        },
                        {
                            "data": "gambar"
                        },
                        {
                            "data": "judul"
                        },
                        {
                            "data": "kategori_id"
                        },
                        {
                            "data": "status"
                        },
                        {
                            "data": "username"
                        },
                        {
                            "data": "dibaca"
                        },
                        {
                            "data": "tanggal"
                        },
                        {
                            "data": "aksi",
                            "orderable": false,
                            "searchable": false
                        },
                    ],
                    "bAutoWidth": false,
                    "columnDefs": [{
                        targets: [0, 1, 2, 3, 4, 5, 6],
                        className: 'text-left'
                    }],
                    "bDestroy": true,
                });
            }

        });

        


        function alertHapus(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda akan menghapus Berita",
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
            var _token = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ route('berita.destroy') }}",
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
    </script>
@endsection
