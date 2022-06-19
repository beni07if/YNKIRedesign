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
        <h2>Forest Peat Landuse Monitoring</h2>
        <p>Forest Peat Landuse Monitoring (FPLM) merupakan sebuah platform layanan informasi berbasis spasial untuk mendorong partisipasi para pihak dalam memonitor dan menyampaikan respon perbaikan kebijakan, standar dan praktik dalam konservasi dan pemanfaatan lahan untuk meningkatkan kelentingan lanskap terhadap dampak perubahan iklim.
        </p>
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
            <h2>Forest Peat Landuse Monitoring</h2>
            <!-- <p>Beberapa isu yang di dorong dalam permasalahan Forest Peatland Landuse Monitoring (FPLM) yang ada di Kalimantan Barat - Indonesia.</p> -->
        </div>

        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column address-issues">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1">Monitoring Rantai Pasok Kelapa Sawit Berkelanjutan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Monitoring Kepatuhan Standard Usaha Lahan Berkelanjutan: ISPO, RSPO, dan NDPE</a>
                    </li>
                    <!-- mightyearth -->
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-3">Monitoring Konflik Sosial Lingkungan dan Tenurial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Monitoring Tata Guna Lahan Desa</a>
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
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Monitoring Aduan Independen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Monitoring Pemanfaatan Ruang: Tambang, Kehutanan, dan Perkebunan </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Monitoring Pengelolaan Perhutanan Sosial: HD-HA-HTR-HKm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Monitoring WPK REDD+</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-12">Status Pengelolaan Lanskap Gambut: Kerentanan dan Kerusakan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-13">Commodity and Smallholder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-14">Monitoring Standard Jaring Pengaman Sosial dan Lingkungan - Safeguard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-15">Human wildlife conflict (HWC)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-16">Illegal wildlife trade (IWT)</a>
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
                    <div class="tab-pane active show" id="tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Ancaman Perampasan Wilayah Adat dan Deforestasi Masih Nyata </h3>
                                <p class="fst-italic">YNKI mengucapkan selamat atas perjuangan #masyarakatadat & desa #kinipan, pada putusan di pengadilan Tipikor Palangkaraya 15062022, Willem Hengki kades Kinipan dinyatakan tidak bersalah & bebas dari tuduhan Tipikor... <a class="button-peta" href="{{route('fplm03')}}">Read more: Interactive Story Maps</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <!-- <img src="assetAdmin/img/PostinganMedia/landuse-selat-remis.jpg" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Inisiatif Penerapan Pendekatan Lanskap pada Pembangunan Desa </h3>
                                <p class="fst-italic">Perencanaan tata guna lahan partisipatif tingkat desa merupakan faktor penting dalam proses pembangunan tingkat desa. Pendekatan ini dapat meningkatkan kapasitas masyarakat dan pemerintah untuk menilai kebutuhan saat ini dan perancangan pembangunan di masa depan. Hal ini terkait dengan definisi desa sebagai kesatuan masyarakat hukum yang memiliki batas wilayah yang berwenang untuk mengatur dan mengurus urusan pemerintahan (UU No. 6 Tahun 2014 Tentang Desa).. <a class="button-peta" href="{{route('fplm04')}}">Read more: Interactive Story Maps</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <!-- <img src="assetAdmin/img/PostinganMedia/landuse-selat-remis.jpg" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Analisis Spasial terkait Kondisi Lanskap - DTA berdasarkan DAS yang Berdampak Pada Banjir Sintang</h3>
                                <p class="fst-italic">Analisis Spasial Daerah Tangkapan Air (DTA), Daerah Genangan, Resapan Banjir berdasarkan..<a class="button-peta" href="#">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Burn Area Detection</h3>
                                <p class="fst-italic">Citra sentinel mendeteksi area kebakaran yang terjadi pada tanggal 15 Februari 2021 di area lanskap..<a class="button-peta" href="#">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-6">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Analisis Spasial Tutupan Hutan di Luar Wilayah Kelola KPH berbasis DAS</h3>
                                <p class="fst-italic">Pemerintah Provinsi Kalimantan Barat pada 4 Maret 2022 melalui Kepala Dinas Lingkungan Hidup dan Kehutanan menerbitkan Surat Keputusan No. S22/66/LHK/2022..<a class="button-peta" href="#">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Analisis Spasial Kondisi Lanskap Delta Kapuas - Kubu Raya - Kalbar</h3>
                                <p class="fst-italic">Menurut analisis spasial YNKI dengan data KLHK, dalam 5 tahun ke belakang kebakaran hutan dan lahan di Lanskap Pesisir Gambut Delta Kapuas terjadi dengan..<a class="button-peta" href="#">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/" alt="" class="img-fluid">
                            </div>
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
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Peta Zonasi Hutan Desa Kalibandung</h3>
                                <p class="fst-italic">Peta Zonasi Hutan Desa Kalibandung..<a class="button-peta" href="#">Read more - Peta Interaktif</a>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assetAdmin/img/PostinganMedia/" alt="" class="img-fluid">
                            </div>
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
                    <div class="tab-pane" id="tab-14">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-15">
                        <div class="row">No data..
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-16">
                        <div class="row">No data..
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us-optional2 section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                    <!-- <h3><strong>Forest Peat Landuse Monitoring</strong></h3> -->
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p> -->
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>01</span> Monitoring Rantai Pasok Kelapa Sawit Berkelanjutan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Monitoring Kepatuhan Standard Usaha Lahan Berkelanjutan: ISPO, RSPO, dan NDPE <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapse"><span>03</span> Monitoring Konflik Sosial Lingkungan dan Tenurial <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse show" data-bs-parent=".accordion-list">
                                <h2 style="font-size: 20px;">Ancaman Perampasan Wilayah Adat dan Deforestasi Masih Nyata</h2>
                                <p class="fst-italic">YNKI mengucapkan selamat atas perjuangan #masyarakatadat & desa #kinipan, pada putusan di pengadilan Tipikor Palangkaraya 15062022, Willem Hengki kades Kinipan dinyatakan tidak bersalah & bebas dari tuduhan Tipikor.. <a class="button-peta" href="{{route('fplm03')}}">Read more: Interactive Story Maps</a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-4"><span>04</span> Monitoring Tata Guna Lahan Desa <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                <h2 style="font-size: 20px;">Inisiatif Penerapan Pendekatan Lanskap pada Pembangunan Desa </h2>
                                <p class="fst-italic">Perencanaan tata guna lahan partisipatif tingkat desa merupakan faktor penting dalam proses pembangunan tingkat desa.. <a class="button-peta" href="{{route('fplm04')}}">Read more: Interactive Story Maps</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-5"><span>05</span> Mitigasi Bencana Karhutla dan Banjir <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-6"><span>06</span> Advokasi Kebijakan (pada lahan berkelanjutan) - Areal Pencabutan Izin <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-7"><span>07</span> Monitoring Pengelolaan HCV-HCS <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-8"><span>08</span> Monitoring Aduan Independen <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-9"><span>09</span> Monitoring Pemanfaatan Ruang: Tambang, Kehutanan, dan Perkebunan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-9" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-10"><span>10</span> Monitoring Pengelolaan Perhutanan Sosial: HD-HA-HTR-HKm <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-10" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-11"><span>11</span> Monitoring WPK REDD+ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-11" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-12"><span>12</span> Status Pengelolaan Lanskap Gambut: Kerentanan dan Kerusakan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-12" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-13"><span>13</span> Commodity and Smallholder <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-13" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-14"><span>14</span> Monitoring Standard Jaring Pengaman Sosial dan Lingkungan - Safeguard <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-14" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-15"><span>15</span> Human wildlife conflict (HWC) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-15" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-16"><span>16</span> Illegal wildlife trade (IWT) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-16" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    No data..
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> -->
        </div>

    </div>
</section><!-- End Why Us Section -->
@endsection