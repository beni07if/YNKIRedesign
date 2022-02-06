@extends('Layouts.MasterWeb')

@section('title')
<title>Profil Page </title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Profil</li>
        </ol>
        <!-- <h2>Halaman Profil</h2> -->

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('MainContent')
<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes">
    <div class="container">
        <div class="section-title">
            <h2sip>GUIDING PRINCIPLES</h2sip>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                    <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                    <img src="assets/img/guide-principle/participatory-development.JPG" alt="">
                    <h4 class="title"><a href="">Participatory Development</a></h4>
                    <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/good-governance.JPG" alt="">
                    <h4 class="title"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Good Governance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/democracy-for-nature.JPG" alt="">
                    <h4 class="title"><a href="">&nbsp;&nbsp;&nbsp;Democracy for Nature&nbsp;&nbsp;&nbsp;</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/biodiversity-management.JPG" alt="">
                    <h4 class="title"><a href="">Biodiversity Management</a></h4>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Icon Boxes Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                    <h3><strong>YNKI</strong> - Organisasi - Yasasan Sosial - Lingkungan - bekerja untuk Visi Kesejahteraa Masyarakat dan Pembangunan Berkelanjutan </h3>
                    <p>
                        Yayasan Natural Kapital Indonesia (YNKI) adalah organisasi non pemerintah yang dibentuk pada tahun 2019 di Pontianak, Kalimantan Barat. Organisasi ini didirikan dengan visi menyelamatkan modal alam termasuk fungsi ekologis di dalamnya, memastikan pengelolaan dan manfaat yang adil dan berkelanjutan bagi seluruh elemen bangsa untuk kesejahteraan masyarakat. <br>
                        Bekerja dengan pendekatan lanskap terpada (<i> integrated landscape apporoach/eccosystem based approach </i>), dengan menerapkan aspek pengelolaan lanskap multi-fungsi (<i> multi functional </i>), prinsip-prinsip demokrasi (<i> multi stakeholder </i>), dan pengelolaan multi skala dari batasan-batasan pengelolaan konvensional administrasi maupun izin konsesi (<i> multi-scale </i>)
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Misi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Menghimpun potensi bersama guna menyelamatkan modal alam dan fungsi-fungsi ekologis, menjamin pengelolaan dan manfaat yang berkeadilan dan berkelanjutan untuk semua elemen bangsa dan kesejahteraan masyarakat.
                                    Mempromosikan partisipasi masyarakat lokal dan para pihak dalam pengelolaan lanskap, masyarakat lokal adalah pihak utama penerima manfaat, sebagai korban, sebagai ancaman, sekaligus solusi pengelolaan. (co- management).

                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Pendekatan Kerja <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Pembangunan Lanskap Berkelanjutan
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Sosisal Media <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Website: https://www.naturalkapital.or.id <br>
                                    Instagram: https://www.instagram.com/yayasannaturalkapital/ <br>
                                    Facebook: https://www.facebook.com/naturalkapital <br>
                                    LinkedIn: https://www.linkedin.com/in/natural-kapital-foundation-731a4a1b5/ <br>
                                    Twitter: https://twitter.com/kapital_natural

                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"><img src="assets/img/foto-ynki/ynki-project.jpg" alt="" class="img-fluid"></div>
        </div>

    </div>
</section><!-- End Why Us Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Key Expertise</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <ul>
                    <li><i class="ri-check-double-line"></i> Inisisasi dan fasilitasi, inisiasi forum dan pengkondisian stakeholder pada lanskap termasuk awareness campaign dan lobby.</li>
                    <li><i class="ri-check-double-line"></i> Jurisdictional approach and rural development policy integration on climate change mitigation.</li>
                    <li><i class="ri-check-double-line"></i> Spatial Analysis , GIS, Mapping untuk mitigasi perubahan iklim dan REDD+</li>
                    <li><i class="ri-check-double-line"></i> Pendampingan program perhutanan sosial dan lanskap agroforestry.</li>
                    <li><i class="ri-check-double-line"></i> Pendampingan kelompok petani kecil mandiri (smallholders) dan koperasi pada komoditas Kelapa Sawit, Hortikultura dan Tanaman Pangan</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li><i class="ri-check-double-line"></i> Konstruksi program remediasi dan kompensasi dari kebijakan RSPO dan NDPE pada tingkat lanskap.</li>
                    <li><i class="ri-check-double-line"></i> Identifikasi, Pengelolaan dan monitoring High Conservation Value (HCV) dan High Carbon Stock (HCS) forest.</li>
                    <li><i class="ri-check-double-line"></i> Social impact assessment (SIA), Social Action Plan and CSR</li>
                    <li><i class="ri-check-double-line"></i> Baseline karakterisasi lingkungan, sosial, ekonomi dan budaya.</li>
                </ul>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Mitra Kerja</h2>
            <p>Berkedudukan di Pontianak, Kalimantan Barat, YNKI telah bekerja dan berkontribusi pada pengembangan dan implementasi konsep pembangunan lanskap terpadu antara lain;</p>
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> Aidenvironment Asia <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : September - Desember 2019<br>
                            Contact Person : Ihwan Rafina, rafina@aidenvironment.asia <br>
                            Bidang Teknis : Membangun program model pemulihan (remediasi dan kompensasi) untuk PT. Graha
                            Agro Nusantara terkait dengan kebijakan NDPE Wilmar di Kalimantan Barat, Indonesia.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">WWF Indonesia <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : November 2019 - April 2020<br>
                            Contact Person : Syahirsyah, syahirsyah@wwf.or.id <br>
                            Bidang Teknis : Penilaian Nilai Konservasi Tinggi dan Hutan Stok Karbon Tinggi terintegrasi pada lanskap
                            di lanskap Agropolitan Kapuas Hulu, Kalimantan Barat, Indonesia.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">NMI (Nordic Microfinance Initiave) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : Februari - Agustus 2020<br>
                            Contact Person : Hans Smit, hh.smit@gmail.com <br>
                            Bidang Teknis : Analisis Spasial Lanskap untuk memitigasi dampak deforestasi lebih lanjut dari petani
                            kecil Kelapa Sawit di Kabupaten Sintang dan Sanggau.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Aidenvironment - Earth Qualizer, WWF Indonesia, ICRAF <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : Desember 2020 – Saat ini<br>
                            Contact Person : Ihwan Rafina, Anas Nashrullah, Happy Hendrawan <br>
                            Bidang Teknis : Inisiasi Pengelolaan dan Pemulihan Multi-Pihak pada Lanskap gambut pesisir
                            Delta-Kapuas
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">WWF-US-EFN Reforestation grant <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : Maret - Oktober 2020<br>
                            Contact Person : Erin Knight, Erin.knight@wwf.org <br>
                            Bidang Teknis : Reforestasi, restorasi revegetasi gambut pada areal Hutan Desa Kalibandung
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">GIZ West Kalimantan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : Juli – Agustus 2020<br>
                            Contact Person : Jumtani, jumtani.jumtani@giz.de <br>
                            Bidang Teknis : Pengembangan Rencana Strategis Betung Kerihun Danau Sentarum
                            Cagar biosfer Kapuas Hulu (BKDS Kapuas Hulu)
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">NMI (Nordic Microfinance Initiative) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : Februari - Agustus 2021<br>
                            Contact Person : Hans Smit, hh.smit@gmail.com <br>
                            Bidang Teknis : Analisis spasial lanskap dan pemetaan untuk memitigasi dampak deforestasi lebih lanjut
                            dari petani kecil Kelapa Sawit di Provinsi Kalimantan Barat.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">WWF Indonesia <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jangka Waktu : September – Desember 2021<br>
                            Contact Person : Anas Nashrullah anasrullah@wwf.id) <br>
                            Bidang Teknis : Arut Belantikan – Ronga Perai forest landscape management strategy
                        </p>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection