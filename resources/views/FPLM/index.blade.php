@extends('Layouts.MasterWeb')

@section('title')
<title>FPLM Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li>Halaman FPLM</li>
        </ol>
        <h2>Forest Peatland Landuse Monitoring</h2>
        <p>Forest Peatland Landuse Monitoring (FPLM) merupakan sebuah layanan yang dikembangkan oleh Yayasan Natural Kapital Indonesi (YNKI) dalam memonitoring kondisi Hutan dan Gambut di tingkat lokal (Kalimantan Barat) dalam bentuk peta interaktif.</p>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<!-- <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
    </div>
</section> -->
<!-- End Recent Blog Posts Section -->

<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <div class="container">

        <div class="section-title">
            <h2>Address Issues</h2>
            <p>Beberapa isu yang di dorong dalam permasalahan Forest Peatland Landuse Monitoring (FPLM) yang ada di Kalimantan Barat - Indonesia.</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column address-issues">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1">Pelanggaran ingkungan (yang sudah direspon pemerintah)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Pelanggaran Standard Swasta (ISPO, RSPO, dan NDPE)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Konflik Sosial Lingkungan Terkait Lahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-4">Tata Guna Lahan Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Mitigasi Bencana Karhutla dan Banjir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Advokasi Kebijakan (pada lahan berkelanjutan) - Areal Pencabutan Izin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Monitoring Pengelolaan HCV-HCS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Monitoring Areal Pencabutan Izin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Monitoring Perkembangan Kebun/Tambang (yang tidak sesuai tempat) di Kawasan Hutan - RTR </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Monitoring Pengelolaan KPS HD-HA-HKm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-11">WPK REDD+</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-12">Gambut (Kerentanan dan Kerusakan)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-13">Smallholder dan Community</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane" id="tab-1">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane  active show" id="tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Inisiatif Penerapan Pendekatan Lanskap pada Pembangunan Desa </h3>
                                <p class="fst-italic">Perencanaan tata guna lahan partisipatif tingkat desa merupakan faktor penting dalam proses pembangunan tingkat desa.. <a class="button-peta" href="{{route('detailFplm')}}">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/landuse-selat-remis.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-6">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-8">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-9">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-10">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-11">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-12">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-13">
                        <div class="row">No data..
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->
@endsection