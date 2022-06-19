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


<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container">

        <div class="section-title">
            <!-- <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Monitoring Konflik Sosial Lingkungan dan Tenurial<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                        <p style="padding-left: 30px;">
                            YNKI mengucapkan selamat atas perjuangan #masyarakatadat & desa #kinipan, pada putusan di pengadilan Tipikor Palangkaraya 15062022, Willem Hengki kades Kinipan dinyatakan..<a class="button-peta-mobile" href="{{route('fplm03')}}">Read more: Interactive Story Maps</a>
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Monitoring Tata Guna Lahan Desa<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Perencanaan tata guna lahan partisipatif tingkat desa merupakan faktor penting dalam proses pembangunan tingkat desa. Pendekatan ini dapat meningkatkan kapasitas masyarakat dan pemerintah untuk menilai kebutuhan saat ini dan perancangan pembangunan di masa depan. Hal ini terkait dengan definisi..<a class="button-peta-mobile" href="{{route('fplm04')}}">Read more: Interactive Story Maps</a>
                        </p>
                    </div>
                </li>

                <!-- <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                        </p>
                    </div>
                </li> -->

            </ul>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->
@endsection