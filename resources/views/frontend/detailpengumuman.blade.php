@extends('frontend.layouts.app')
@section('content')
<div class="page-header largest parallax custom text-center" style="background-image:url(asset('uploads/foto_berita/'.$pengumuman->gambar))" data-0="background-position:50% 50%;" data-top-bottom="background-position:50% 100%">
    <div class="container-fluid">
        <h1 data-300-top="opacity:1;transform:scale(1);" data-top-bottom="opacity:0.4;transform:scale(1.9);">{{$pengumuman->judul}}</h1>
        <ol class="breadcrumb" data-300-top="opacity:1;" data-top-bottom="opacity:0.4;">
            <li><a href="{{route('berita.index')}}">Home</a></li>
            <li><a href="#">Detail</a></li>
            <li class="active">{{$pengumuman->judul}}</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <article class="entry">
        <div class="entry-media">
            <figure>
                <img src="{{asset('uploads/foto_berita/'.$pengumuman->gambar)}}" alt="{{$pengumuman->judul_seo}}">
            </figure>
        </div>

        <div class="entry-content-container">
            <div class="entry-meta">
                <div><i class="fa fa-calendar"></i>{{$pengumuman->tanggal}}</div>
                <div><a href="#"><i class="fa fa-eye"></i>{{$pengumuman->dibaca}} View(s)</a></div>
                <div><a href="#"><i class="fa fa-user"></i> {{$pengumuman->username}}</a></div>
            </div>

            <div class="entry-content-wrapper">
                <h2 class="entry-title">{{$pengumuman->judul}}</h2>
                <div class="entry-content">
                    <p>{!!$pengumuman->isi_berita!!}</p>
                </div>
            </div>
        </div>

    </article>

    <div class="single-related-posts">
        <h3 class="title custom mb25">Related Posts</h3>

        <div class="swiper-container related-posts-carousel">
            <div class="swiper-wrapper">
                @foreach ($related as $r)
                <div class="swiper-slide">
                    <article class="entry entry-grid">
                        <div class="entry-media">
                            <figure>
                                <a href=""><img src="{{asset('uploads/foto_berita/'.$r->gambar)}}" style="height:80% !important" alt="Post image"></a>
                            </figure>
                        </div>
                        <div class="entry-content-container">
                            <div class="entry-meta">
                                <div><i class="fa fa-calendar"></i>{{$r->tanggal}}</div>
                                <div><a href="#"><i class="fa fa-eye"></i>{{$r->dibaca}} View(s)</a></div>
                                <div><a href="#"><i class="fa fa-user"></i> {{$r->username}}</a></div>
                            </div><!-- End .entry-meta -->

                            <div class="entry-content-wrapper">
                                <h2 class="entry-title"><a href="{{route('beritapage.detail',$r->judul_seo)}}">{{$r->judul}}</a></h2>
                                <div class="entry-content">
                                    <p>{!! \Illuminate\Support\Str::limit($r->isi_berita,100)!!}</p>
                                    <a href="{{route('beritapage.detail',$r->judul_seo)}}" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>


@endsection