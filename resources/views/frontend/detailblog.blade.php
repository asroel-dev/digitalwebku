@extends('frontend.layouts.app')
@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li><a href="/">Berita</a></li>
                <li><span>/</span></li>
                <li><a href="/">Detail Berita</a></li>
                {{-- <li class="active"> {{ $berita->judul }}</li> --}}
            </ul>
            {{-- <h2> {{ $berita->judul }}</h2> --}}
        </div>
    </div>
</section>

<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="{{asset('uploads/foto_berita/'.$berita->gambar)}}" alt="">
                        <div class="news-details__date">
                            <p>{{ $berita->tanggal  }}</p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <ul class="list-unstyled news-details__meta">
                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                            </li>
                        </ul>
                        <h3 class="news-details__title">{{ $berita->judul }}</h3>
                        <p class="news-details__text-1">{!! $berita->isi_berita !!}</p>
                    </div>
                    <div class="news-details__bottom">
                        <div class="news-details__social-list">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="/berita" class="sidebar__search-form">
                            <input type="search" class="form-control" name="search" value="{{ request('search') }}" type="text" placeholder="Cari Berita ..." />
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <div class="sidebar-shape-1"
                            style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                        <h3 class="sidebar__title">Latest posts</h3>
                        <ul class="sidebar__post-list list-unstyled">

                            @foreach ($related as $item)

                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset('uploads/foto_berita/'.$item->gambar)}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i
                                                class="fas fa-user-circle"></i> By admin</span>
                                        <a href="/berita/detail/{{ $item->slug }}">{{ $item->judul }}</a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach

                            
                          
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <div class="sidebar-shape-1"
                            style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                        <h3 class="sidebar__title">Kategori</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach ($kategori_berita as $item)
                            <li><a href="/berita?kategori={{ $item->slug }}">{{ $item->name }} <span class="icon-right-arrow"></span></a></li>
                            
                            @endforeach
                            
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection