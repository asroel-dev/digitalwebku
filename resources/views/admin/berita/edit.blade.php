@extends('admin.layouts.dashboard')
@section('title','Edit Berita')
@section('content')
<form action="{{route('berita.update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('berita.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                </div>
                <div class="card-body">



                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul Berita</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Isi Judul Berita"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" value="{{$data->judul}}" class="form-control form-control-solid @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Berita" name="judul" required />
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" id="isi_berita">{{$data->isi_berita}}</textarea>
                        @error('isi_berita')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="text-right mt-5">
                        {{-- <button type="reset" class="btn btn-sm btn-danger">Reset</button> --}}
                        <button name="draft" value="N" class="btn btn-sm btn-info btn-block">Draft</button>
                        <button name="publish" value="Y" class="btn btn-sm btn-primary btn-block">Publish</button>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Kategori
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id">
                            <option value="" holder>-Pilih Kategori-</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $data->kategori_id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Image
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <img src="{{asset('uploads/foto_berita/'.$data->gambar)}}" id="preview" alt="" class="img-fluid mb-2" width="300px">
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                        @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection

@section('js')
<script>

    $(document).ready(function() {
            CKEDITOR.replace('isi_berita',{
                height: 700
            });
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