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
        <h2>Halaman Profil</h2>

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('profil')
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

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">Training GAP Pengelolaan Kebun yang Lebih Baik untuk Petani Swadaya, Kecamatan Parindu Kabupaten Sanggau</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                            Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->

                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">Training on Landscape Level Management (High Level) for KPH</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                            Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->

                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">Pelatihan POC dan Demplot Pertanian</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                            Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="assets/img/guide-principle/participatory-development.JPG" alt="">
                            <h4><a href="blog-single.html">Training GAP Pengelolaan Kebun Sawit Swadaya, Sanggau</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/guide-principle/biodiversity-management.JPG" alt="">
                            <h4><a href="blog-single.html">Training on Landscape Level Management</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">Rilis <span>(25)</span></a></li>
                            <li><a href="#">Opini <span>(12)</span></a></li>
                            <li><a href="#">Kabar Dari Lapangan <span>(5)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories-->



                    <h3 class="sidebar-title">Postingan Media Sosial</h3>
                    <div class="sidebar-item search-form">
                        <blockquote class="twitter-tweet">
                            <p lang="in" dir="ltr">RPPEG Kalbar: Mengelola 1,7 juta ha Gambut <a href="https://t.co/O6L33BKcTa">https://t.co/O6L33BKcTa</a> via <a href="https://twitter.com/LinkedIn?ref_src=twsrc%5Etfw">@LinkedIn</a></p>&mdash; NaturalKapitalIndonesia (@kapital_natural) <a href="https://twitter.com/kapital_natural/status/1433735539924951041?ref_src=twsrc%5Etfw">September 3, 2021</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <!-- <a class="twitter-timeline" href="https://twitter.com/kapital_natural?ref_src=twsrc%5Etfw">Tweets by kapital_natural</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->

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
            <h2sip>BASE ON</h2sip>
        </div>

        <div class="row" data-aos="zoom-in">

            <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/logo-ynki/logo-sdgs.png" class="img-fluid" alt="">
            </div>

            <div id="img" class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/logo-ynki/logo-paris-agreement.png" class="img-fluid" alt="">
            </div>

            <div id="img" class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/logo-ynki/logo-convention-biologi-diversity.png" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Story Maps Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <!-- <h2sip>Story Maps</h2sip> -->
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            <iframe src="https://storymaps.arcgis.com/stories/9a28c27cca9d4072bf1560d7cbc3e9d2" width="100%" height="1000px" frameborder="0" allowfullscreen allow="geolocation"></iframe>
        </div>

    </div>

    </div>
</section><!-- End Story Maps Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
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
</section><!-- End Contact Section -->

@endsection