  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

          <!-- <h1 class="logo me-auto"><a href="{{route('index')}}">YNKI</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="{{route('index')}}" class="logo me-auto"><img src="assets/img/logo-ynki/logo-ynki.png" style="width:250px; height:50px;" alt="gambar" class="img-fluid"></a> -->
          <a href="{{route('index')}}" class="logo me-auto"><img src="assets/img/logo-ynki/logo-ynki-terbaru.png" alt="YNKI" class="img-fluid"></a>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto " href="{{route('index')}}">Beranda</a></li>
                  <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{route('profil.Index')}}">Profil</a></li>
                          <li><a href="{{route('StafYnki')}}">Team</a></li>
                          <li><a href="{{route('partner.index')}}">Partner</a></li>
                          <li><a href="#">Portofolio</a></li>
                          <li><a href="#">Independent Supervisory Board</a></li>
                          <li class="dropdown"><a href="#"><span>Pendekatan Kami</span> <i class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Program dan Pendekatan Kerja</a></li> <!-- ini = ToC -->
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
                                  <li><a href="#">Advokasi Kebijakan</a></li>
                                  <li><a href="#">Climate Smart Agriculture</a></li>
                              </ul>
                          </li>
                          <li><a href="{{route('ListProgramStrategi')}}"><span>Program Strategi</span> </a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Media dan Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{route('ListRilis')}}">Rilis</a></li>
                          <li><a href="{{route('ListOpini')}}">Opini</a></li>
                          <li><a href="{{route('ListKabarDariLapangan')}}">Kabar Dari Lapangan</a></li>
                          <li><a href="#">Karakteristik Lanskap</a></li>
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
                  <li><a class="nav-link scrollto " href="{{route('KontakKami')}}">Kontak Kami</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->


  <!-- Masukan data dibawah ke atas -->