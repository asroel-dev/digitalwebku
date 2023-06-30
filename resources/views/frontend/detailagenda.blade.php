@extends('frontend.layouts.app')
@section('content')

<section class="page-title page-title-blank-2 bg-white" id="page-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="d-none">{{$agenda->tema}}.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/agenda">Agenda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$agenda->tema}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog blog-single" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="blog-entry">
                    <div class="entry-img">
                        {{-- <img src="{{asset('uploads/foto_berita/'.$agenda->gambar)}}" alt="" /> --}}
                        <div class="entry-meta">
                            <div class="entry-date"> <span class="date">{{ $agenda->tanggal }}</span>
                            </div>
                            <div class="entry-author"><a href="blog-grid.html">{{$agenda->pengirim}}</a></div>
                        </div>
                    </div>
                    <div class="entry-content">
                        <div class="entry-title">
                            <h4>{{  $agenda->judul }}.</h4>
                        </div>
                        {{-- <div class="entry-bio">
                           {!! $agenda->isi_berita !!}
                        </div> --}}
                        <div class="entry-content-container">
                            <div class="entry-meta">
                                <div><i class="fa fa-calendar"></i>{{$agenda->tgl_mulai}} s/d {{$agenda->tgl_selesai}}</div>
                                <div><a href="#"><i class="fa fa-map-marker"></i> {{$agenda->tempat}}</a></div>
                                <div><a href="#"><i class="fa fa-user"></i> {{$agenda->pengirim}}</a></div>
                            </div>
                            <div class="entry-content-wrapper">
                                <h2 class="entry-title">{{$agenda->tema}}</h2>
                                <div class="entry-content">
                                    <p>{!!$agenda->isi_agenda!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="sidebar sidebar-blog">
                    <div class="widget widget-search">
                        <div class="widget-title">
                            <h5>search</h5>
                        </div>
                        <div class="widget-content">
                            <form action="/agenda" class="form-search">
                                <div class="input-group">
                                    <input class="form-control" name="search" value="{{ request('search') }}" type="text" placeholder="Search ..." /><span
                                        class="input-group-btn">
                                        <button class="btn" type="button"><i
                                                class="energia-search-Icon"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="widget widget-recent-posts">
                        <div class="widget-title">
                            <h5>Related posts</h5>
                        </div>
                        <div class="widget-content">
                            @foreach ($related as $item)
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{asset('uploads/foto_berita/'.$item->gambar)}}" alt="" />
                                    </div>
                                <div class="post-content">
                                    <div class="post-date"><span class="date">{{ $item->tanggal }}</span>
                                        </div>
                                    <div class="post-title"><a href="/berita/detail/{{ $item->slug }}">{{ $item->judul }} </a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <div class="container-fluid">
    <article class="entry">
        <div class="entry-content-container">
            <div class="entry-meta">
                <div><i class="fa fa-calendar"></i>{{$agenda->tgl_mulai}} s/d {{$agenda->tgl_selesai}}</div>
                <div><a href="#"><i class="fa fa-map-marker"></i> {{$agenda->tempat}}</a></div>
                <div><a href="#"><i class="fa fa-user"></i> {{$agenda->pengirim}}</a></div>
            </div>
            <div class="entry-content-wrapper">
                <h2 class="entry-title">{{$agenda->tema}}</h2>
                <div class="entry-content">
                    <p>{!!$agenda->isi_agenda!!}</p>
                </div>
            </div>
        </div>
    </article>
</div> --}}


@endsection