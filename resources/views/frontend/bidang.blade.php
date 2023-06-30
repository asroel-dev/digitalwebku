@extends('frontend.layouts.app')
@section('content')


<section class="page-title page-title-13 mb-5" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
        <div class="bg-section"><img src="/front_assets/images/page-titles/13.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="title text-center">
                        <h1 class="title-heading">{{$tagName}}</h1>
                        <ol class="breadcrumb breadcrumb-light d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$tagName}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section class="blog blog-grid blog-grid-5 mb-5" id="blog">
    <div class="container">
        <div class="row">
            @foreach ($bidang as $p)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-entry" data-hover="">
                    <div class="entry-content">
                        <div class="entry-meta">
                            <div class="entry-date"><span class="day">{{ $p->tanggal }}</span><span class="year"></span>
                            </div>
                            <div class="entry-author">
                                <p>Admin</p>
                            </div>
                        </div>
                        <div class="entry-title">
                            <h4><a href="/berita/{{ $p->judul_seo }}">{{ $p->judul }}</a></h4>
                        </div>
                        <div class="entry-img-wrap">
                            <div class="entry-img"><a href="/berita/{{ $p->judul_seo }}">
                                <img src="{{asset('uploads/foto_berita/'.$p->gambar)}}" alt="" />
                                    </a>
                            </div>
                        </div>
                        <div class="entry-bio">
                            <p>{{ $p->desc }}</p>
                        </div>
                        <div class="entry-more"> <a class="btn btn--white btn-bordered" href="/berita/{{ $p->judul_seo }}">Selengkapnya </a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text--center">
                <ul class="pagination">
                    <li><a class="current" href="blog-grid.html">1</a></li>
                    <li><a href="blog-grid.html">2</a></li>
                    <li><a href="#" aria-label="Next"><i class="energia-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection