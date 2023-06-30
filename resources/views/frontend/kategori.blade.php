@extends('frontend.layouts.app')
@section('content')
<div class="page-header largest parallax custom text-center" style="background-image:url(assets/images/page-header-bg.jpg)" data-0="background-position:50% 50%;" data-top-bottom="background-position:50% 100%">
    <div class="container-fluid">
        <h1 data-300-top="opacity:1;transform:scale(1);" data-top-bottom="opacity:0.4;transform:scale(1.9);">{{$katName}}</h1>
        <ol class="breadcrumb" data-300-top="opacity:1;" data-top-bottom="opacity:0.4;">
            <li><a href="{{route('front.index')}}">Home</a></li>
            <li class="active">{{$katName}}</li>
        </ol>
    </div><!-- End .container-fluid -->
</div><!-- End .page-header -->

<div class="container-fluid">
    <div class="blog-row">
        <div id="blog-item-container" class="max-col-3">
            @foreach ($kategori as $p)
            <article class="entry entry-grid">
                <div class="entry-media">
                    <figure>
                        <a href="{{asset('uploads/foto_berita/'.$p->gambar)}}"><img src="{{asset('uploads/foto_berita/'.$p->gambar)}}" alt="Post image"></a>
                    </figure>
                </div><!-- End .entry-media -->
                <!-- 
                                <div class="entry-icon">
                                    <i class="fa fa-file-image-o"></i>
                                </div> -->

                <div class="entry-content-container">
                    <div class="entry-meta">
                        <div><i class="fa fa-calendar"></i>{{$p->tanggal}},{{$p->jam}}</div>
                        <div><a href="#"><i class="fa fa-eye"></i>{{$p->dibaca}} View(s)</a></div>
                    </div><!-- End .entry-meta -->

                    <div class="entry-content-wrapper">
                        <h2 class="entry-title"><a href="{{route('beritapage.detail',$p->judul_seo)}}">{{$p->judul}}</a></h2>
                        <div class="entry-content">
                            <!-- <p>{!! \Illuminate\Support\Str::limit($p->isi_berita,100)!!}</p> -->
                            <a href="{{route('beritapage.detail',$p->judul_seo)}}" class="readmore">Selengkapnya<i class="fa fa-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-content-wrapper -->
                </div><!-- End .entry-content-container -->
            </article>
            @endforeach
        </div><!-- End #blog-item-container -->
    </div><!-- End .row -->

    <div class="pagination-wrapper">
        <nav class="pagination-container">
            <label>Showing: 1-4 of 16</label>
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div><!-- End .pagination-wrapper -->
</div><!-- End .container-fluid -->

@endsection