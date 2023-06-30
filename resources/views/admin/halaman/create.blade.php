@extends('admin.layouts.dashboard')
@section('title','Buat Halaman')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('halaman.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
            <form method="POST" action="{{route('halaman.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Judul"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid @error('judul') is-invalid @enderror" placeholder="Masukkan Judul" name="judul" required />
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Isi Halaman (id)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Halaman"></i>
                            </label>
                            <textarea class="form-control @error('isi_halaman') is-invalid @enderror" name="isi_halaman" id="isi_halaman"></textarea>
                            @error('isi_halaman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">File</span>Dapat berupa File atau Gambar
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Upload Gambar"></i>
                            </label>
                            <img src="{{asset('assets_panel/image/no-image.jpg')}}" id="preview" alt="" class="img-fluid mb-2" width="300px">
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
        CKEDITOR.replace('isi_halaman');
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

    $("#gambar").change(function() {
        readURL(this);
    });
</script>
@endsection