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
        <h2>Forest Peat Landuse Participatory Monitoring</h2>
        <p>Forest Peat Landuse Participatory Monitoring (FPLPM) merupakan sebuah platform layanan informasi berbasis spasial untuk mendorong partisipasi para pihak dalam memonitor dan menyampaikan respon perbaikan kebijakan, standar dan praktik dalam konservasi dan pemanfaatan lahan untuk meningkatkan kelentingan lanskap terhadap dampak perubahan iklim.
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
            <h2>Forest Peat Landuse Participatory Monitoring</h2>
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
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Monitoring Konflik Sosial Lingkungan dan Tenurial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-4">Monitoring Tata Guna Lahan Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pengelolaan DAS, Mitigasi Bencana Karhutla dan Banjir</a>
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
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-16">Biodiversity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-16">Ethnicity, Culture and History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-16">HCS and Deforestation Threat</a>
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
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Ancaman Perampasan Wilayah Adat dan Deforestasi Masih Nyata - Desa Kinipan</h3>
                                <a class="button-peta" href="{{route('fplm03')}}">Show Interactive Story Maps</a>
                                <br><br>
                                <p class="fst-italic">YNKI mengucapkan selamat atas perjuangan #masyarakatadat & desa #kinipan, pada putusan di pengadilan Tipikor Palangkaraya 15062022, Willem Hengki kades Kinipan dinyatakan tidak bersalah & bebas dari tuduhan Tipikor.
                                    Putusan ini tidak lepas dari luasnya dukungan moral #masyarakatlokal #organisasimasyarakatsipil termasuk para ahli hukum. Para pihak mengenal Willem Hengki sebagai wakil perjuangan masyarakat adat Kinipan, terhadap perampasan Tanah Adat & deforetasi, di wilayah adat desanya dari PT. SML, PT. SLR & PT. TAN. <br><br>
                                    Dukungan material datang dari beberapa pakar hukum, dikutip CNNIndonesia, ELSAM, FITRA, ICW, & Febri Diansyah menyerahkan Amicus Curiae ke Pengadilan Tipikor Palangkaraya. Mereka mendesak agar majelis hakim menghentikan langkah keliru aparat penegak hukum dengan membebaskan Willem Hengki. Pendampingan kasus juga diberikan oleh @walhikalteng @amankalteng, @save_our_borneo & @LBH se-Kalimantan, didampingi penasihat hukum @ParlinBayuHutabarat.
                                    YNKI memberikan apresiasi kepada Majelis Hakim yang secara bijaksana telah mengambil keputusan bebas. YNKI meyakini proses pelaporan & penuntutan kasus Tipikor sebelumnya terindikasi “rekayasa” untuk melemahkan perjuangan masyarakat adat & desa Kinipan.<br><br>
                                    Kedepan dengan hasil putusan bebas murni & indikasi rekayasa, YNKI berharap pemerintah pusat @gakkum_klhk @kemenkumhamri @kantorstafpresidenri yang sebelumnya telah turun ke Kinipan untuk memverifikasi kasus penyerobotan lahan & deforestasi untuk meningkatkan dukungan dengan memberhentikan operasional, mengaudit & meninjau kembali izin konsesi sawit @kemenkomarves PT. SML, PT. SLR & PT. TAN yang sampai saat ini masih valid untuk melanjutkan ekspansi di Kinipan. YNKI juga berharap kepada perusahaan dengan kebijakan rantai pasokan yang bertanggung jawab @supportsustainablepalmoil @wilmar_international @GAR @musimmas_group @pertamina & lainnya untuk tidak memasukkan CPO perusahaan tersebut dalam rantai pasokan.
                                    Kepada para pihak untuk tetap memberikan dukungan, terkait mudahnya mekanisme hukum saat ini dipergunakan untuk mematahkan perjuangan #masyarakatadat #masyarakatlokal oleh oknum yang berkepentingan atau mendukung sekelompok bisnis.
                                    #tatagunalahan
                                    <br>
                                    Sumber dan Kontributor (penulis)
                                    <br>
                                    Sumber dan Kontributor (penulis)
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <!-- <img src="assetAdmin/img/PostinganMedia/landuse-selat-remis.jpg" alt="" class="img-fluid"> -->
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Ce8iggQpFUR/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">

                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active show" id="tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3 class="titlemaps">Inisiatif Penerapan Pendekatan Lanskap pada Pembangunan Desa </h3>
                                <a class="button-peta" href="{{route('fplm04')}}">Show Interactive Story Maps</a>
                                <br><br>
                                <p class="fst-italic">Perencanaan tata guna lahan partisipatif tingkat desa merupakan faktor penting dalam proses pembangunan tingkat desa. Pendekatan ini dapat meningkatkan kapasitas masyarakat dan pemerintah untuk menilai kebutuhan saat ini dan perancangan pembangunan di masa depan. Hal ini terkait dengan definisi desa sebagai kesatuan masyarakat hukum yang memiliki batas wilayah yang berwenang untuk mengatur dan mengurus urusan pemerintahan (UU No. 6 Tahun 2014 Tentang Desa). <br>

                                    Tata guna lahan tingkat desa akan terkait dengan lintas level kewenangan dan kebijakan yang harus diakomodasi, seperti adanya batasan pemanfaatan terkait kawasan hutan, kebijakan perlindungan ekosistem gambut dan mangrove maupun batasan pada praktik penggunaan dan pemanfaatannya. <br>

                                    Lebih jauh tidak sedikit desa yang berada di sekitar kawasan hutan, lindung dan konservasi seringkali menjadi penghambat dalam pembangunan sosial ekonomi dan infrastruktur. Dalam panduan perencanaan pembangunan desa, perlindungan lingkungan termasuk pelestarian alam dan keanekaragaman hayati termasuk dalam klaster belanja pembangunan desa bidang Pemberdayaan Masyarakat. Kegiatan yang dapat diprogramkan antara lain penghijauan, pengelolaan hutan bakau, perlindungan lahan gambut, perlindungan mata air, pembersihan dan perawatan aliran sungai, perlindungan terumbu karang dan lainnya sesuai dengan kondisi desa. <br>

                                    Pemerintah melalui Permendesa PDT dan Transmigrasi nomor 13 tahun 2020, pemerintah mendorong program Pemetaan potensi dan sumber daya lahan pembangunan desa akan berkontribusi pada rancangan adanya peta rancangan tata guna lahan desa dalam rangka menuju perencanaan desa serta pencapaian SDGs desa. Lebih lanjut pemetaan ini menjadi outcome bagi hadirnya intervensi program atau proyek dari otoritas di atasnya (supra desa) antara lain pemerintah pusat, provinsi dan kabupaten. <br>

                                    #yayasannaturalkapital
                                    #democracyfornature
                                    #tatagunalahan
                                    <br>
                                </p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <!-- <img src="assetAdmin/img/PostinganMedia/landuse-selat-remis.jpg" alt="" class="img-fluid"> -->
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CbM-JzOL0vz/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">

                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
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
<!-- <section id="faq" class="faq section-bg">
    <div class="container">

        <div class="section-title">
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

            </ul>
        </div>

    </div>
</section> -->
<!-- End Frequently Asked Questions Section -->
@endsection