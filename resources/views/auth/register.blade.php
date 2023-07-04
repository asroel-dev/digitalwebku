
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Halaman Pendaftaran </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Digital Webku" />
        <meta name="keywords" content="Digital Webku" />
        <meta name="author" content="Digital Webku" />
        <meta name="email" content="Digital Webku" />
        <meta name="website" content="Digital Webku" />
        <meta name="Version" content="v4.4.0" />

        <!-- favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('uploads/foto_website/' . $profil->favicon) }}" /> --}}
        
        <!-- Css -->
        <!-- Bootstrap Css -->
        <link href="/assets_auth/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets_auth/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets_auth/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="/assets_auth/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <div class="back-to-home">
            <a href="" class="back-button btn btn-icon btn-primary"><i data-feather="arrow-left" class="icons"></i></a>
        </div>
        <section class="cover-user">
            <div class="container-fluid px-0">
                <div class="row g-0 position-relative">
                    <div class="col-lg-4 cover-my-30 order-2">
                        <div class="cover-user-img d-lg-flex align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="card border-0" style="z-index: 1">
                                        <div class="card-body p-0">
                                            <h4 class="card-title text-center">Daftar digitalwebku.com</h4>
                                            <form class="login-form mt-4" action="{{ route('register') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Pengguna <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                                <input type="text" class="form-control ps-5 @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Website <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="" name="nama_website" value="{{ old('nama_website') }}" required autocomplete="name" autofocus >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Subdomain <span class="text-danger">*</span></label>
                                                            {{-- <div class="form-icon position-relative">
                                                                <input type="text" class="form-control ps-5 @error('name') is-invalid @enderror" placeholder="" name="subdomain" value="{{ old('subdomain') }}" required autocomplete="name" autofocus >
                                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                                <small id="passwordHelpInline" class="text-muted">
                                                                    Must be 8-20 characters long.
                                                                  </small>
                                                            </div> --}}
                                                            <div class="input-group">
                                                                
                                                                <input type="text" pattern="\S(.*\S)?" class="form-control" name="subdomain" value="{{ old('subdomain') }}"  required>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">.digitalwebku.com</span>
                                                                  </div>
                                                                  <small id="passwordHelpInline" class="text-muted">
                                                                    Huruf kecil dan tanpa spasi
                                                                  </small>
                                                                  @error('subdomain')
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                  </span>
                                                                  @enderror
                                                              </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                                <input type="email" class="form-control ps-5 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                                <input type="password" class="form-control ps-5 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="password" >
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Konfimasi Password <span class="text-danger">*</span></label>
                                                            <div class="form-icon position-relative">
                                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                                <input type="password" class="form-control ps-5 @error('password') is-invalid @enderror" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password" >
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">Saya menyetujui <a href="#" class="text-primary">Terms And Condition</a></label>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary">Daftar</button>
                                                        </div>
                                                    </div><!--end col-->


                                                    <div class="mx-auto">
                                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Sudah punya akun ?</small> <a href="{{ route('login') }}" class="text-dark fw-bold">Login disini</a></p>
                                                    </div>
                                                </div><!--end row-->
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div> <!-- end about detail -->
                    </div> <!-- end col -->    

                    <div class="col-lg-8 offset-lg-4 padding-less img order-1 jarallax" data-jarallax data-speed="0.5" style="background-image:url('/assets_auth/images/user/02.jpg')"></div><!-- end col -->    
                </div><!--end row-->
            </div><!--end container fluid-->
        </section>



        <script src="/assets_auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Main Js -->
        <script src="/assets_auth/libs/feather-icons/feather.min.js"></script>
        <script src="/assets_auth/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="/assets_auth/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>