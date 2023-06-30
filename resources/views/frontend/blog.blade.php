@extends('frontend.layouts.app')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bga.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Berita</li>
                </ul>
                <h2>
                    {{ $title }}
                </h2>
            </div>
        </div>
    </section>

    <section class="feature-four">
        <div class="container">
            <div class="feature-four__inner">
                <div class="feature-four__search-box">
                    <form action="/berita" class="feature-four__form">
                        <div class="feature-four__form-input">
                            <input name="search" type="search" value="{{ request('search') }}" placeholder="Cari Berita disini...">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="news-page">
        <div class="container">
            <div class="row">
                @if ($berita->total() == 0)
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <span class="">Berita Tidak Ditemukan</span>
                            <img class="img-fluid rounded mx-auto d-block" style="width: 500px"
                                src="/assets/images/nodata.jpg" alt="">
                        </div>
                    </div>
                @else
                    @foreach ($berita as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img style="  width: 100%;
                                height: 200px;
                                object-fit: cover;"
                                        src="{{ asset('uploads/foto_berita/' . $item->gambar) }}" alt="">
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__content-inner">
                                        <div class="news-one__content">
                                            <ul class="list-unstyled news-one__meta">
                                                <li><a href="/berita/{{ $item->slug }}"><i class="far fa-user-circle"></i>
                                                        Admin</a>
                                                </li>
                                                <li><a href="/berita?kategori={{ $item->kategori->slug }}"><i
                                                            class="fa-solid fa-list"></i> {{ $item->kategori->name }}</a>
                                                </li>
                                            </ul>
                                            <h3 class="news-one__title"><a
                                                    href="/berita/{{ $item->slug }}">{{ $item->judul }}</a></h3>
                                            <p>
                                                {!! \Illuminate\Support\Str::limit($item->isi_berita, 160) !!}
                                            </p>
                                        </div>
                                        <div class="news-one__bottom">
                                            <div class="news-one__read-more">
                                                <a href="/berita/{{ $item->slug }}"> <span
                                                        class="icon-right-arrow"></span> Selengkapnya</a>
                                            </div>
                                            <div class="news-one__share">
                                                <a href="#"><i class="fas fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="news-one__social-box">
                                            <ul class="list-unstyled news-one__social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-one__date">
                                        <p>{{ tgl_indo($item->tanggal) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="become-volunteer-one__inner">
                {{ $berita->links() }}
            </div>

        </div>
    </section>





@endsection
