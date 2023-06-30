@extends('frontend.layouts.app')
@section('content')
    <section class="page-title page-title-5" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="assets/images/page-titles/5.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Our Client</h1>
                            <p class="title-desc">A true partnership is a two-way street — ideas and information flow openly
                                and regularly, based on a foundation of mutual trust and respect for one another’s expertise
                                — and our clients embrace this philosophy.
                            </p>
                            <div class="title-action"> <a class="btn btn--primary btn--inversed" href="#">
                                    get started<i class="energia-arrow-right"></i></a>
                                    <a
                                    class="btn btn--bordered btn--white" href="#">explore our plans</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Client">Client</a></li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <section class="awards awards awards-1" id="awards">
        <div class="container">
            <div class="row">
                @foreach ($client as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img">
                            <img src="{{ asset('uploads/foto_aplikasi/' . $item->gambar) }}" alt="Client" />
                        </div>
                        <div class="award-content">
                            <h4 class="award-title"><a href="{{ $item->link }} ">{{ $item->judul_menu }}</a></h4>
                            <p class="award-desc">
                                @if (app()->getLocale() == 'id')
                                {{ $item->detail_menu_id}}
                                @endif
                                @if (app()->getLocale() == 'en')
                                {{ $item->detail_menu }}

                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
               
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
@endsection
