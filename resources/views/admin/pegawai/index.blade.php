@extends('admin.layouts.dashboard')
@section('title','Pegawai')
@section('content')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary btn-sm mb-5" data-bs-toggle="modal" data-bs-target="#tambahGambar">Sync Pegawai</button>
                <table id="example" class="table table-striped table-row-bordered gy-5 gs-7" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Foto</th>
                            <th class="text-left">NIP</th>
                            <th class="text-left">Nama</th>
                            <th class="text-left">Jabatan</th>
                            <th class="text-left">Pangkat</th>
                            <th class="text-left">J.Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k => $p)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td > 
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ $p->Photo }}">
                                    <div class="  start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                            </td>
                            <td> {{ $p->nipbaru }} </td>
                            <td> {{ $p->haji }} {{$p->gldepan }} {{$p->gdepan}} {{$p->nama}} {{$p->glblk}} </td>
                            <td> {{ $p->NJab }} </td>
                            <td> {{ $p->NPang }} </td>
                            <td> {{ $p->nkelamin }} </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                    
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

        // function load_data(unit = '') {
        //     $('#kt_datatable_zero_configuration').DataTable({
        //         "pageLength": 10,
        //         "processing": true,
        //         "serverside": true,
        //         "scrollX": true,
        //         "language": {
        //             "processing": 'Memuat...'
        //         },
        //         "serverSide": true,
        //         "ajax": {
        //             url: "",
        //             data: {
        //                 data: data,
        //             }
        //         },
        //         "columns": [{
        //                 "data": "DT_RowIndex",
        //                 "orderable": false,
        //                 "searchable": false
        //             },
        //             {
        //                 "data": "gambar",
        //             },
        //             {
        //                 "data": "judul",
        //             },
        //         ],
        //         "bAutoWidth": false,
        //         "columnDefs": [{
        //             targets: [0, 1, 2],
        //             className: 'text-center'
        //         }],
        //         "bDestroy": true,
        //     });
        // }

        $('#example').DataTable();

    });


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

    function readURLEdit(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#previewEdit').attr('src', e.target.result);
                $('#previewEdit').show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#gambarEdit").change(function() {
        readURLEdit(this);
    });
    $("#gambar").change(function() {
        readURL(this);
    });
</script>
@endsection


