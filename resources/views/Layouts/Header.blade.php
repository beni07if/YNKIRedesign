<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('index')}}">YNKI</a></h1>
        <!-- <img src="assets/img/logo-ynki/logo-ynki-bulat.JPG" alt=""> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{route('home.index')}}" class="logo me-auto"><img src="assets/img/logo-ynki/logo-ynki-panjang.JPG" alt="" class="img-fluid"></a> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('index')}}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('profil.index')}}">Profil</a></li>
                        <li><a href="{{route('StafYnki')}}">Team</a></li>
                        <li><a href="{{route('partner.index')}}">Partner</a></li>
                        <li><a href="#">Independent Supervisory Rebort</a></li>
                        <li class="dropdown"><a href="#"><span>Pendekatan Kami</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Pendekatan Lanskap</a></li>
                                <li><a href="#">Komoditas Masyarakat</a></li>
                                <li><a href="#">Kebijakan Keberlanjutan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Program Kami</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Rehabilitasi Lanskap</a></li>
                                <li><a href="#">Peningkatan Sosial Ekonomi Masyarakat</a></li>
                                <!-- <li><a href="#">Rehabilitasi dan Restorasi</a></li> -->
                                <li><a href="#">Advokasi Kebijakan</a></li>
                                <li><a href="#">Climate Smart Agriculture</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Media dan Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('ListRilis')}}">Rilis</a></li>
                        <li><a href="{{route('opini.index')}}">Opini</a></li>
                        <li><a href="{{route('kabar-dari-lapangan.index')}}">Kabar Dari Lapangan</a></li>
                        <li><a href="#">Karakteristik Lanskap</a></li>
                        <li><a href="#">Teory of Change</a></li>
                        <li><a href="#">Library</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Ikut Terlibat</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Program Magang</a></li>
                        <li><a href="#">Ikut Terlibat</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{route('kontak-kami.index')}}">Kontak Kami</a></li>
                <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->