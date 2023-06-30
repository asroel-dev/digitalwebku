@extends('admin.layouts.dashboard')
@section('title','Operation')
@section('content')
<div class="card">
    <form id="kt_project_settings_form" class="form" action="{{route('operation.update',$data->id_identitas)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body p-9">
            <div class="row mb-5">
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Image</div>
                </div>
                <div class="col-lg-2">
                    <img src="{{asset('uploads/foto_pimpinan/'.$data->image)}}" class="img-fluid" width="100px">
                </div>
                <div class="col-lg-6">
                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('uploads/foto_pimpinan/'.$data->image)}}')">
                        <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('assets/media/svg/brand-logos/volicity-9.svg')"></div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                        </label>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                </div>
            </div>
            <div class="row mb-8">
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Title</div>
                </div>
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control form-control-solid" value="{{$data->name}}" name="name" />
                </div>
            </div>
            <div class="row mb-8">
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Description</div>
                </div>
                <div class="col-xl-9 fv-row">
                    <textarea name="description" class="form-control form-control-solid h-100px">{{$data->description}}</textarea>
                </div>
            </div>

            <div class="row mb-8">
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Judul</div>
                </div>
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control form-control-solid" value="{{$data->nama}}" name="nama" />
                </div>
            </div>
            <div class="row mb-8">
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Deskripsi</div>
                </div>
                <div class="col-xl-9 fv-row">
                    <textarea name="deskripsi" class="form-control form-control-solid h-100px">{{$data->deskripsi}}</textarea>
                </div>
            </div>

        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Submit</button>
        </div>
    </form>
</div>
@endsection