@extends('admin.layouts.dashboard')
@section('title','Dashboard')
@section('content')
<div class="row g-5 g-xl-8">
    <div class="col-xl-3">
        <a href="{{route('berita.index')}}" class="card bg-body hoverable card-xl-stretch mb-xl-8">
            <div class="card-body shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                </svg>
                <div class="text-inverse-body fw-bolder fs-2 mb-2 mt-5">{{$beritaCount}}</div>
                <div class="fw-bold text-inverse-body fs-7">Berita</div>
            </div>
        </a>
    </div>
    <div class="col-xl-3">
        <a href="{{route('berita.index')}}" class="card bg-body hoverable card-xl-stretch mb-xl-8">
            <div class="card-body shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z" />
                </svg>
                <div class="text-inverse-body fw-bolder fs-2 mb-2 mt-5">{{ $pengunjungCount }}</div>
                <div class="fw-bold text-inverse-body fs-7">Jumlah Pengunjung</div>
            </div>
        </a>
    </div>
    <div class="col-xl-3">
        <a href="{{route('agenda.index')}}" class="card bg-body hoverable card-xl-stretch mb-xl-8">
            <div class="card-body shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg>
                <div class="text-inverse-body fw-bolder fs-2 mb-2 mt-5">{{ $dokumenCount }}</div>
                <div class="fw-bold text-inverse-body fs-7">Dokumen</div>
            </div>
        </a>
    </div>
    {{-- <div class="col-xl-3">
        <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
            <div class="card-body shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                </svg>
                <div class="text-inverse-body fw-bolder fs-2 mb-2 mt-5">{{$pengaduanCount}}</div>
                <div class="fw-bold text-inverse-body fs-7">Pengaduan</div>
            </div>
        </a>
    </div> --}}
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Pengunjung Tahun Ini
                </div>
            </div>
            <div class="card-body">
                <div id="chartdiv" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-6">
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Berita Paling Sering Di Kunjungi</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{route('berita.index')}}" type="button" class="btn btn-sm btn-color-primary">
                        Selengkapnya >>
                    </a>

                </div>

            </div>
            <div class="card-body pt-5">
                @foreach ($beritaView as $b)
                <div class="d-flex align-items-sm-center mb-7">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="{{asset('uploads/foto_berita/'.$b->gambar)}}" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$b->judul}}</a>
                            <span class="badge badge-light fw-bolder my-2">Dibaca {{$b->dibaca}}</span>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    {{-- <div class="col-lg-6">
        <div class="card card-xxl-stretch">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder mb-2 text-dark">Pengaduan</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <a href="{{route('pengaduan.index')}}" type="button" class="btn btn-sm btn-color-primary">
                        Selengkapnya >>
                    </a>

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::Timeline-->
                <div class="timeline-label">
                    @foreach ($pengaduan as $p)
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$p->tanggal}}</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-warning fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="fw-mormal timeline-content text-muted ps-3">Subjek {{$p->subjek}} | Pesan {{$p->pesan}}</div>
                        <!--end::Text-->
                    </div>
                    @endforeach
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
    </div> --}}
</div>
@endsection
@section('js')
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
    // Themes begin
    // Using default theme
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.XYChart);

    // var data = [];
    // var value = 50;
    // for (var i = 0; i < 300; i++) {
    //     var date = new Date();
    //     date.setHours(0, 0, 0, 0);
    //     date.setDate(i);
    //     value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
    //     data.push({
    //         date: date,
    //         value: value
    //     });
    // }

    var chartData = null;
    $.ajax({
        url: "{{ route('chart') }}",
        method: "GET",
        async: false,
        success: function(data) {
            console.log(data);
            chartData = data;
        },
        error: function() {}
    })

    chart.data = chartData;

    // Create axes
    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    dateAxis.renderer.minGridDistance = 60;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = "count";
    series.dataFields.dateX = "tanggal";
    series.tooltipText = "{count}"

    series.tooltip.pointerOrientation = "vertical";

    chart.cursor = new am4charts.XYCursor();
    chart.cursor.snapToSeries = series;
    chart.cursor.xAxis = dateAxis;

    //chart.scrollbarY = new am4core.Scrollbar();
    chart.scrollbarX = new am4core.Scrollbar();
</script>
@endsection