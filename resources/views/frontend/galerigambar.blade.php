@extends('frontend.layouts.app')
@section('content')

<section class="page-header">
  <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/bg_indx.jpg)">
  </div>
  <div class="container">
      <div class="page-header__inner">
          <ul class="thm-breadcrumb list-unstyled">
              <li><a href="/">Home</a></li>
              <li><span>/</span></li>
              <li class="active">Pages</li>
          </ul>
          <h2>Galeri</h2>
      </div>
  </div>
</section>

<section class="gallery-page">
  <div class="container">
      <div class="row">
        @foreach ($data as $g)
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="gallery-page__single">
                <div class="gallery-page__img">
                    <img height="250px" src="{{asset('uploads/foto_galeri/'.$g->gambar)}}" alt="{{$g->judul}}" alt="">
                    <a href="{{asset('uploads/foto_galeri/'.$g->gambar)}}" alt="{{$g->judul}}" class="img-popup"></a>
                    <div class="gallery-page__content">
                        <p class="gallery-page__sub-title">{{$g->judul}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

      </div>
  </div>
</section>


@endsection