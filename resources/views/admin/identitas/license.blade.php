@extends('admin.layouts.dashboard')
@section('title','License')
@section('content')
<div class="card">
    <form id="kt_project_settings_form" class="form" action="{{route('license.update',$data->id_identitas)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body p-9">
            
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
    
    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Licenses
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="just-padding">
                            @foreach ($licenses as $d)
                                <div class="list-group list-group-root well">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#editValues{{ $d->id_identitas }}" class="list-group-item">
                                        <h6>{{ $d->name }} / {{ $d->nama }}</h6>
                                    </a>
                                </div>

                                <div class="modal fade" id="editValues{{ $d->id_identitas }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content rounded">
                                            <div class="modal-header pb-0 border-0 justify-content-end">
                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                    data-bs-dismiss="modal">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                fill="#000000">
                                                                <rect fill="#000000" x="0" y="7"
                                                                    width="16" height="2" rx="1" />
                                                                <rect fill="#000000" opacity="0.5"
                                                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                    x="0" y="7" width="16"
                                                                    height="2" rx="1" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                <form method="post" class="form"
                                                    action="{{ route('licenses.update', $d->id_identitas) }}">
                                                    @csrf
                                                    <div class="mb-13 text-center">

                                                        <h1 class="mb-3">Edit Data Operation </h1>

                                                    </div>
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Operation Name (en)</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                                                        </label>
                                                        <input type="text" value="{{ $d->name }}"
                                                            class="form-control form-control-solid @error('name') is-invalid @enderror"
                                                            placeholder="" name="name" required />
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Nama Operasi (id)</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Masukkan Nama Manu"></i>
                                                        </label>
                                                        <input type="text" value="{{ $d->nama }}"
                                                            class="form-control form-control-solid @error('nama') is-invalid @enderror"
                                                            placeholder="" name="nama" required />
                                                        @error('nama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                     <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Description (En)</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Input Description"></i>
                                                        </label>
                                                        <textarea name="description" class="form-control form-control-solid h-100px">{{ $d->description }}</textarea>
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Deskripsi (Id)</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Masukkan Deskripsi"></i>
                                                        </label>
                                                        <textarea name="deskripsi" class="form-control form-control-solid h-100px">{{ $d->deskripsi }}</textarea>
                                                        @error('deskripsi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    

                                                    <div class="text-center">
                                                        <button type="reset" class="btn btn-light me-3">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
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