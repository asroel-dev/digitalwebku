@extends('admin.layouts.dashboard')
@section('title','Buat Agenda')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('agenda.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
            <form method="POST" action="{{route('agenda.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tema Agenda</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Tema Agenda"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid @error('tema') is-invalid @enderror" placeholder="Masukkan Tema Agenda" name="tema" required />
                        @error('tema')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Isi Agenda</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Agenda"></i>
                            </label>
                            <textarea class="form-control @error('isi_agenda') is-invalid @enderror" name="isi_agenda" id="isiagenda"></textarea>
                            @error('isi_agenda')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tempat Agenda</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Tempat"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid @error('tempat') is-invalid @enderror" placeholder="Masukkan Tempat" name="tempat" required />
                        @error('tempat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Gambar</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Upload Gambar"></i>
                            </label>
                            <!--end::Label-->
                            <img src="{{asset('assets_panel/image/no-image.jpg')}}" id="preview" alt="" class="img-fluid mb-2" width="300px">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Mulai</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tanggal Mulai"></i>
                        </label>
                        <!--end::Label-->
                        <input type="date" class="form-control form-control-solid @error('tgl_mulai') is-invalid @enderror" placeholder="Masukkan Tanggal Mulai" name="tgl_mulai" required />
                        @error('tgl_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Selesai</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tanggal Selesai"></i>
                        </label>
                        <!--end::Label-->
                        <input type="date" class="form-control form-control-solid @error('tgl_selesai') is-invalid @enderror" placeholder="Masukkan Tanggal Mulai" name="tgl_selesai" required />
                        @error('tgl_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Jam</span>
                        </label>
                        <!--end::Label-->
                        <span class="text-gray">Contoh : 07:00 s/d Selesai</span>
                        <input type="text" class="form-control form-control-solid @error('jam') is-invalid @enderror" placeholder="Masukkan Jam" name="jam" required />
                        @error('jam')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Pengirim</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid @error('pengirim') is-invalid @enderror" placeholder="Masukkan Pengirim" name="pengirim" required />
                        @error('pengirim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="float-right">
                        <div class="text-right mt-5">
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </div>


                </div>
            </form>


        </div>
    </div>


</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        CKEDITOR.replace('isiagenda');


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

    $("#image").change(function() {
        readURL(this);
    });
</script>
@endsection