@extends('frontend.layouts.app')
@section('title', $identitas->nama_website)
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-two clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">
                @foreach ($banner as $b)

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url({{ asset('uploads/foto_banner/' . $b->gambar) }});"></div>
                        <!-- /.image-layer -->

                        {{-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div> --}}
                        {{-- <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> --}}

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        {{-- <p class="main-slider-two__sub-title">{{ $b->judul }}</p>
                                        <h2 class="main-slider-two__title">{{ $b->deskripsi }}</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="{{ $b->link }}" class="thm-btn main-slider-two__btn"> Selengkapnya</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                @endforeach
            </div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>


    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"></span>
                <h2 class="section-title__title">Berita Terbaru
                </h2>
            </div>
            <div class="row">
                @foreach ($berita as $post)

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                @if ($post->gambar)
                                    <img style="  width: 100%;
                                    height: 200px;
                                    object-fit: cover;" src="{{ asset('uploads/foto_berita/' . $post->gambar) }}" alt="Gambar Berita" />
                                @else
                                    <img src="assets/images/blog/news-1-1.jpg" alt="Tidak ada Gambar">
                                @endif
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="{{ route('beritapage.detail', $post->slug) }}"><i
                                                        class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a
                                                href="{{ route('beritapage.detail', $post->slug) }}">{{ $post->judul }}</a></h3>
                                                <p class="causes-one__text">{!! \Illuminate\Support\Str::limit($post->isi_berita, 160) !!}.</p>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="{{ route('beritapage.detail', $post->slug) }}"> <span
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
                                    <p>{{ tgl_indo($post->tanggal) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="become-volunteer-one__inner">
                <div class="become-volunteer-one__btn-box">
                    <a href="/berita" class="thm-btn become-volunteer-one__btn">Semua Berita</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1" style="background-image: url(assets/images/shapes/about-one-shape-1.png);">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img height="" src="{{ asset('uploads/foto_pimpinan/' . $sambutan->foto_kepala) }}" alt="">

                            </div>
                            <div class="about-one__img-border"></div>
                            {{-- <div class="about-one__shape-2 zoom-fade">
                                <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                            </div> --}}
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                            </div>
                            {{-- <div class="about-one__shape-4 zoominout">
                                <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Sambutan Kepala Satuan Polisi Pamong Praja Prov. Sulsel </span>
                            <h2 class="section-title__title">{{ $sambutan->nama_kepala }}</h2>
                        </div>
                        <p class="about-one__text">{{ $sambutan->sambutan }} </p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">{{ $sambutan->jabatan_kepala }} <br> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/bg_indexa.jpg);"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png);"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">{{ $profil->nama_website }}</p>
                <h3 class="become-volunteer-one__title">Dokumen Publik
                </h3>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->

    <section class="events-one">
        <div class="events-one-shape-1" style="background-image: url(assets/images/shapes/events-one-shape-1.png)">
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($kategori_file as $item)
                <div class="col-xl-2 col-lg-2  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="/dokumen?kategori={{ $item->slug }}">{{ $item->name }} <br>
                                             </a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">{{ $item->deskripsi }}</p>
                        <a href="/dokumen?kategori={{ $item->slug }}" class="thm-btn feature-one__btn">Lihat</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Galeri Kegiatan</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="gallery-one__container">
                <ul class="list-unstyled gallery-one__list">
                    @foreach ($gambar as $item)
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img">
                            <img style="
                                max-width: 400px;
                                height: 300px;
                                object-fit: cover;
                                " src="/uploads/foto_galeri/{{ $item->gambar }}" alt="">
                            <a href="/uploads/foto_galeri/{{ $item->gambar }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">{{ $item->judul }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="become-volunteer-one__inner">
                <div class="become-volunteer-one__btn-box">
                    <a href="/galeri-gambar" class="thm-btn become-volunteer-one__btn">Selengkapnya</a>
                </div>
            </div>

        </div>
    </section>

@endsection

@push('css')
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script type="text/javascript">
        window.onload = () => {
            $('#onload').modal('show');
        }
    </script>
@endpush
