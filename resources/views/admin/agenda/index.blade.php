@extends('admin.layouts.dashboard')
@section('title','Agenda')
@section('content')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{route('agenda.create')}}" class="btn btn-primary btn-sm">+ Tambah Agenda</a>
                <table id="tableAgenda" class="table table-hover display" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Tema</th>
                            <th>Tempat</th>
                            <th>Pengirim</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jam</th>
                            <th>Pembuat</th>
                            <th class="text-center">Aksi</th>
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
            $('#tableAgenda').DataTable({
                "pageLength": 10,
                "processing": true,
                "serverside": true,
                "scrollX": true,
                "language": {
                    "processing": 'Memuat...'
                },
                "serverSide": true,
                "ajax": {
                    url: "{{route('agenda.index')}}",
                },
                "columns": [{
                        "data": "DT_RowIndex",
                        "orderable": false,
                        "searchable": false
                    },
                    {
                        "data": "tema"
                    },
                    {
                        "data": "tempat"
                    },
                    {
                        "data": "pengirim"
                    },
                    {
                        "data": "tgl_mulai"
                    },
                    {
                        "data": "tgl_selesai"
                    },
                    {
                        "data": "jam"
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
                    targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                    className: 'text-center'
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
            url: "{{ route('agenda.destroy') }}",
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
@endsection