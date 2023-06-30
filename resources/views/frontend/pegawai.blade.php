@extends('frontend.layouts.app')
@section('content')

<section class="event-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="event-details__left">
                    <div class="event-details__top">
                        <div class="event-details__date">
                            <p>{{  Carbon\Carbon::now(); }}</p>
                        </div>
                        <h3 class="event-details__title">Daftar Pegawai</h3>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_pegawai as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['NJab'] }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection