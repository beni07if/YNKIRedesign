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
                    <h3><strong>YNKI</strong> Natural Kapital Foundation, Indonesia - Democracy for Nature </h3>
                    <p>
                        Natural Kapital Foundation Indonesia (YNKI) is non-government organization that works for the vision of nature resiliencies for people good living and well-being. YNKI's mission is to transform the land use sector, and its value chain actor of which benefiting for landscape productivity and climate resiliencies through mainstreaming landscape approach. Established in 2019, YNKI is based in Pontianak West Kalimantan, Indonesia and currently supported by 14 staff and 4 Internships. YNKI strategic program of; 1). Landscape research on social-environment characteristics and resiliencies. 2). Stakeholder and Smallholders empowerment on mainstreaming land use of best practice. 3). stakeholder engagements and Policy advocacy for land use policy and transformation. YNKI relevant experience and partner, includes;
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Landscape Research and Strategy development <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Landscape Recovery and Reforestation Model development of Delta Kapuas Coastal Peat Landscape, Kubu Raya district West Kalimantan. Partners with KPN group plantation and aidenvironment, Ihwan Rafina. irafina@gmail.com -/- a). Landscape HCV and HCS study of Kapuas Hulu Agropolitan and, b). Forest Landscape Arut-Belantikan Strategy development, partners with WWF Id, igunawan@wwf.or.id) -/- Landscape and Oil Palm Independent Smallholder mapping and baseline survey for Sintang, Sanggu, Sekadau, Landak and Ketapang district West Kalimantan. Partners with NMI-CSMF, Harmen Smit, hh.smit@gmail.com
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>Villages and Smallholder Empowerment mainstreaming best practice and knowledge sharing <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Peat Restoration-Reforestation and Institutional capacity building of Kalibandung Village Forest, Kubu Raya, partners with WWF-US, stephanie.eiseman@wwfus.org -/- Smallholder demo plot for non-irrigation Rice, horticulture, organic fertilizer, Sanggau West Kalimantan, partners with NMI-CSMF, hh.smit@gmail.com. -/- Institutional Capacity Building on administrative and financial management, Gema Sawit Lestari cooperative (Sanggau) and Rimba Harapan (Sintang district) West Kalimantan, YNKI Internal project. -/- Woman Smallholder Group Training on Horticulture, Organic Fertilizer and Product Innovation on Kalibandung, Limbung and Tebang Kacang Villages in Kubu Raya, YNKI Internal Project -/- Horticulture Demo Plot and Organic fertilizer training for Women Smallholders Group, Kayu Bunga-Melawi and Sungai Segak Villages-Sintang District, West Kalimantan, partners with WWF Indonesia anashrullah@wwf.id and PT. East West Seed Indonesia.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Policy advocacy and stakeholder engagements for landscape governance improvement. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Landscape Delta Kapuas Peat Recovery and Restoration Workshop, Shared Knowledge and Stakeholders Partnership. Collaborations with Kubu Raya District Government, district planning Agency (BaPPeDA), WWF Indonesia, aidenvironment and BRGM (mangrove and peat restoration taskforce). -/- Basic and Advance Training on Landscape Level Management for 17 KPH (FMU) of West Kalimantan. Partners with BPHP VIII-ADB-FIP program, Herculana Elsinta (ernipandan@yahoo.com) -/- Webinar series of Hulu Kapuas, Melawi and Ketungau Watershed management, Sintang Flood impact and Stakeholder participation for watershed rehabilitation and reforestation, in collaborations with Mongabay Indonesia, Inside Pontianak and Governor of West Kalimantan. Further regard YNKI program implementation please refer into Website https://www.naturalkapital.or.id and Social Media; https://twitter.com/kapital_natural, https://www.linkedin.com/company/natural-kapital-foundation, https://web.facebook.com/naturalkapital, https://www.instagram.com/yayasannaturalkapital/
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
            <h2>Roles and Strategy</h2>
        </div>

        <div class="row content">

            <div class="col-lg-3">
                <h4>Research</h4>
                <ul>
                    <li><i class="ri-check-double-line"></i> Characterization of environmental & social landscape</li>
                    <li><i class="ri-check-double-line"></i> Value chain & treacebility study</li>
                    <li><i class="ri-check-double-line"></i> Business model analysis - commodity product & NTFP</li>
                    <li><i class="ri-check-double-line"></i> Lancscape risk assessment</li>
                    <li><i class="ri-check-double-line"></i> Landscape opportunity</li>
                    <li><i class="ri-check-double-line"></i> Knowledge management</li>
                    <li><i class="ri-check-double-line"></i> Stakeholder analysis</li>
                    <li><i class="ri-check-double-line"></i> Policy & governance analysis</li>
                    <li><i class="ri-check-double-line"></i> Natural resources valuation & environmental service</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="col-lg-12 align-items-stretch "><img src="assets/img/foto-ynki/roles-and-strategy3.jpg" alt="" class="img-fluid"></div>
            </div>

            <div class="col-lg-3">
                <h4>Advisory & Empowerment</h4>
                <p>Awareness :</p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Sense of place, risk & benefit</li>
                    <li><i class="ri-check-double-line"></i> Sense of social</li>
                    <li><i class="ri-check-double-line"></i> Sense of critical ecologi</li>
                    <li><i class="ri-check-double-line"></i> Inisiative forum</li>
                    <li><i class="ri-check-double-line"></i> Public business strategy</li>
                    <li><i class="ri-check-double-line"></i> Best practice</li>
                    <li><i class="ri-check-double-line"></i> Environmental service</li>
                    <li><i class="ri-check-double-line"></i> Land use integration</li>
                    <li><i class="ri-check-double-line"></i> Inovation of land use integration</li>
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