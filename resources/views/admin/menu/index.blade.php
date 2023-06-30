@extends('admin.layouts.dashboard')
@section('title','Menu')
@section('css')
<style>
    .just-padding {
        padding: 5px;
    }

    .list-group.list-group-root {
        padding: 0;
        overflow: hidden;
    }

    .list-group.list-group-root .list-group {
        margin-bottom: 0;
    }

    .list-group.list-group-root .list-group-item {
        border-radius: 0;
        border-width: 1px 0 0 0;
    }

    .list-group.list-group-root>.list-group-item:first-child {
        border-top-width: 0;
    }

    .list-group.list-group-root>.list-group>.list-group-item {
        padding-left: 30px;
    }

    .list-group.list-group-root>.list-group>.list-group>.list-group-item {
        padding-left: 45px;
    }
</style>
@endsection
@section('content')
<div class="row mt-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Tambah Menu
                </div>
            </div>
            <form method="POST" action="{{route('menu.store')}}">
                @csrf
                <div class="card-body">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul Menu </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Masukkan Judul Menu" name="name" required />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Link</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Link"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid @error('link') is-invalid @enderror" placeholder="Input Link" name="link" required />
                        @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Menu Parent</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Menu Utama"></i>
                        </label>
                        <select class="form-control" name="parent_id">
                            <option value="" holder>--Pilih--</option>
                            @foreach ($data as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach
                        </select>
                        @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Menu List
                </div>
            </div>
            <div class="card-body">
                <div class="just-padding">
                    @foreach ($data as $d)
                    <div class="list-group list-group-root well">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#editMenu{{$d->id}}" class="list-group-item">
                            <h6>{{$d->name}} / {{$d->link}}</h6> 
                        </a>
                        @if ($d->details->isNotEmpty())
                        @foreach ($d->details as $de)
                        <div class="list-group">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#editMenuDetail{{$de->id}}" class="list-group-item">{{$de->name}} / <span class="text-primary">  {{$de->link}}</span>  </a>
                        </div>
                        <div class="modal fade" id="editMenuDetail{{$de->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <div class="modal-content rounded">
                                    <div class="modal-header pb-0 border-0 justify-content-end">
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
                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                        <form method="POST" class="form" action="{{route('menudetail.update',$de->id)}}">
                                            @csrf
                                            <div class="mb-13 text-center">
                                                <h1 class="mb-3">Edit Data Menu Detail </h1>
                                            </div>

                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Judul Menu </span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Judul Menu"></i>
                                                </label>
                                                <input type="text" value="{{$de->name}}" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Masukkan Nama Menu" name="name" required />
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Link</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                                                </label>

                                                <input type="text" value="{{$de->link}}" class="form-control form-control-solid @error('link') is-invalid @enderror" placeholder="Masukkan Link " name="link" required />
                                                @error('link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="text-center">
                                                <a href="{{route('deletedetail.menu',$de->id)}}" type="submit" class="btn btn-danger me-3">Hapus</a>
                                                <button type="reset" class="btn btn-light me-3">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @endif

                    </div>

                    <div class="modal fade" id="editMenu{{$d->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content rounded">
                                <div class="modal-header pb-0 border-0 justify-content-end">
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
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    <form method="POST" class="form" action="{{route('menu.update',$d->id)}}">
                                        @csrf
                                        <div class="mb-13 text-center">

                                            <h1 class="mb-3">Edit Data Menu  </h1>

                                        </div>

                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Judul Menu </span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                                            </label>
                                            <input type="text" value="{{$d->name}}" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="" name="name" required />
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Link</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                                            </label>

                                            <input type="text" value="{{$d->link}}" class="form-control form-control-solid @error('link') is-invalid @enderror" placeholder="Masukkan Link " name="link" required />
                                            @error('link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <a href="{{route('delete.menu',$d->id)}}" type="submit" class="btn btn-danger me-3">Hapus</a>
                                            <button type="reset" class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    // $(document).ready(function() {});


    // function menuAtas {
    //     $(`#editMenuAtas${id}`).modal('show');
    //     var url = $('#menuatas').data("url");

    //     console.log(url);
    //     $.ajax({
    //         url: url,
    //         method: "GET",
    //         success: function(data) {
    //             console.log(data);
    //             $('#idmenuatas').val(data.id_menu);
    //             $('#nameatas').val(data.name);
    //             $('#linkmenuatas').val(data.link);
    //         },
    //         error: function() {}
    //     })
    // }

    function hapus {
        var _token = "{{ csrf_token() }}";
        $.ajax({
            url: "{{ route('halaman.destroy') }}",
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