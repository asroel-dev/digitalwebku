@extends('frontend.layouts.app')
@section('content')

<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Dokumen</li>
            </ul>
            <h2>
            @if (request('kategori'))
                Dokumen : {{ $title->name }}
            @else
                Semua Dokumen
            @endif
            </h2>
        </div>
    </div>
</section>

<section class="donation">
    <div class="container">
        <div class="row">
            @foreach ($dokumen as $item)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        {{-- <img src="assets/images/resources/causes-1-1.jpg" alt="">
                        <div class="causes-one__cat">
                            <p>Education</p>
                        </div> --}}
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a target="_blank"  href="{{ asset('uploads/dokumen/'. $item->file) }}">{{ $item->judul }}</a>
                        </h3>
                        <p class="causes-one__text">{{ $item->detail }}.</p>
                        <div class="causes-one__progress">
                            <a target="_blank" href="{{ asset('uploads/dokumen/'. $item->file) }}"> Download File </a>
                            {{-- <div class="causes-one__progress-shape"
                                style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                            </div>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="36%">
                                    <div class="count-text">36%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>

@endsection