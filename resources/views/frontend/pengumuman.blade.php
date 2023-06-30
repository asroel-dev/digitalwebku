@extends('frontend.layouts.app')
@section('content')


<section class="page-title page-title-12" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
        <div class="bg-section"><img src="/front_assets/images/page-titles/12.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="title text-center">
                        <h1 class="title-heading">Pengumuman</h1>
                        <p class="title-desc">Daftar Pengumuman oleh Inspektorat Daerah Provinsi Sulawesi Selatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
            </ol>
        </div>
    </div>
</section>
<section class="projects projects-modern projects-modern-3" id="projects-modern-3">
    <div class="container">
        <div class="row" id="projects-all">

            @foreach ($pengumuman as $p)
        
            <div class="col-12 col-md-6 col-lg-4 project-item filter-finance filter-supply">
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img
                                src="/front_assets//images/projects/modern/1.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-cat">
                             
                                <div><i class="fa fa-calendar"></i>{{$p->tanggal}},{{$p->jam}}</div>

                            </div>
                            <div class="project-title">
                                <h4><a href="{{route('pengumuman.detail',$p->judul_seo)}}">{{$p->judul}}</a>
                                </h4>
                            </div>
                            <div class="project-desc">
                                <p>{!! \Illuminate\Support\Str::limit($p->isi_berita,100)!!}</p>
                            </div>
                            <div class="project-more"> <a class="btn btn--bordered btn--white"
                                    href="{{route('pengumuman.detail',$p->judul_seo)}}">Selengkapnya <i class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

           
        </div>
        <div class="row">
            <div class="col-12 text-center"><a class="btn btn--primary" id="load-more"
                    href="javascript:void(0)">load more <i class="fas fa-plus"></i></a></div>
        </div>
    </div>
</section>


@endsection