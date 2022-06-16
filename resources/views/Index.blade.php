@extends('Layouts.MasterWebIndex')

@section('title')
<title>Natural Kapital Foundation</title>
@endsection

@section('slideShow')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/foto-ynki/home1.jpg" style="width: 100%;" alt="First slide" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="assets/img/foto-ynki/home2.jpg" style="width: 100%;" alt="Second slide" class="img-fluid">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- <img src="assets/img/foto-ynki/home1.jpg" style="width: 100%;" alt="" class="img-fluid"> -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>NATURAL KAPITAL FOUNDATION</h1>
                <h2>For Sustainable Resilience Landscape</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=s7XDGI5Lnqo&t=2186s" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/pakperi.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div> -->
</section><!-- End Hero -->
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
                    <h4 class="title"><a href="#">Participatory Development</a></h4>
                    <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/good-governance.JPG" alt="">
                    <h4 class="title"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Good Governance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/democracy-for-nature.JPG" alt="">
                    <h4 class="title"><a href="#">&nbsp;&nbsp;&nbsp;Democracy for Nature&nbsp;&nbsp;&nbsp;</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <img src="assets/img/guide-principle/biodiversity-management.JPG" alt="">
                    <h4 class="title"><a href="#">Biodiversity Management</a></h4>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Icon Boxes Section -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">
                @foreach($postingan as $post)
                <article class="entry">

                    <div class="">
                        <img src="assetAdmin/img/PostinganMedia/{{$post->foto}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="{{ route('DetailRilis', $post->id) }}">{{$post->judul}}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$post->kategori}} YNKI</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at}}</time></a></li>
                            <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p class="tinymce-editor">
                            {{ $post->caption }}
                        </p>
                        <div class="read-more">
                            <a href="{{ route('DetailRilis', $post->id) }}">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                @endforeach
                <!-- <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div> -->

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach($postinganmore as $post)
                        <div class="post-item clearfix">
                            <img src="assetAdmin/img/PostinganMedia/{{$post->foto}}" alt="">
                            <h4><a href="{{ route('DetailRilis', $post->id) }}">{{$post->judul}}</a></h4>
                            <time datetime="2020-01-01">{{$post->created_at}}</time>
                        </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <!-- <li><a href="#">Rilis <span>(25)</span></a></li>
                            <li><a href="#">Opini <span>(12)</span></a></li>
                            <li><a href="#">Kabar Dari Lapangan <span>(5)</span></a></li> -->
                            <li><a href="{{route('ListRilis')}}">Rilis </a></li>
                            <li><a href="{{route('ListOpini')}}">Opini </a></li>
                            <li><a href="{{route('ListKabarDariLapangan')}}">Kabar Dari Lapangan </a></li>
                        </ul>
                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Recent Post Twitter YNKI</h3>
                    <div class="sidebar-item search-form">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CepqEDipiMg/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">

                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div><!-- End sidebar search formn-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="section-title">
            <h2sip style="color: #fff;">BASED ON</h2sip>
        </div>

        <div class="row" data-aos="zoom-in">

            <div class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                <a href=" https://www.undp.org/sustainable-development-goals" target="blank"><img src="assets/img/logo-ynki/logo-sdgs.png" class="img-fluid" alt=""></a>
            </div>

            <div id="img" class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                <a href="https://unfccc.int/process-and-meetings/the-paris-agreement/the-paris-agreement" target="blank"><img src="assets/img/logo-ynki/logo-paris-agreement.png" class="img-fluid" alt=""></a>
            </div>

            <div id="img" class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                <a href="https://www.cbd.int/convention/" target="blank"><img src="assets/img/logo-ynki/logo-convention-biologi-diversity.png" class="img-fluid" alt=""></a>
            </div>

        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Story Maps Section ======= -->
<section id="blog" class="blog">
    <!-- <iframe src="https://storymaps.arcgis.com/stories/05e9c2f09e454ab89e64cb62899b7112" width="100%" height="500px" frameborder="0" allowfullscreen allow="geolocation"></iframe> -->
    <!-- <iframe src="https://storymaps.arcgis.com/stories/05e9c2f09e454ab89e64cb62899b7112" width="100%" height="1000px" frameborder="0" allowfullscreen allow="geolocation"></iframe> -->
</section><!-- End Story Maps Section -->

<!-- ======= Contact Section ======= -->
<!-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak Kami</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Alamat:</h4>
                        <p>Jalan Karna Sosial No.88 Kota Pontianak</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>naturalkapital@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telephone:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                    <iframe src="https://storymaps.arcgis.com/stories/05e9c2f09e454ab89e64cb62899b7112" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section> -->
<!-- End Contact Section -->
@endsection