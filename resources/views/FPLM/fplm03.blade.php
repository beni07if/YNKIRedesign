@extends('Layouts.MasterWeb')

@section('title')
<title>Status Lahan Kinipan</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-4 d-flex flex-column justify-content-flex-start align-items-stretch  order-2 order-lg-1">

                <div class="content">
                    <h3>Ancaman Perampasan Wilayah Adat dan Deforestasi Masih Nyata - Desa Kinipan</h3>
                    <p>

                        <iframe width="399" height="246" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTBcMeJ-8l5ULAXdaqkpZPjGvhsmkvmM4W8yW28_HZ1P60zFOUBk4T61PjvTaS_wPxkwQhP0UAwdkxf/pubchart?oid=788819742&amp;format=interactive"></iframe>
                        <iframe width="406" height="251" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTBcMeJ-8l5ULAXdaqkpZPjGvhsmkvmM4W8yW28_HZ1P60zFOUBk4T61PjvTaS_wPxkwQhP0UAwdkxf/pubchart?oid=76667578&amp;format=interactive"></iframe>
                        <!-- <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Ce8iggQpFUR/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    </blockquote>
                    <script async src="//www.instagram.com/embed.js"></script> -->
                    </p>
                </div>

            </div>
            <!-- maps service  -->
            <div class="col-lg-8 align-items-stretch order-1 order-lg-2 img">
                <!-- map clasic -->
                <iframe style="padding-top: 40px;" width="1200" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Kinipan" src="//beni07if.maps.arcgis.com/apps/Embed/index.html?webmap=f833d49512f8496e8ea97b44c5914b7c&extent=110.7482,-2.032,111.7267,-1.5152&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light"></iframe>
                <!-- end map classic -->

                <!-- map viewer -->
                <!-- <iframe style="width: 1200 px; height: 700px;" src=https://beni07if.maps.arcgis.com/apps/mapviewer/index.html?webmap=216fea1dc49e4965833a83c8487f8781 width=”1200px″ height=”800px″ frameborder=”0″ style=”border:0″ allowfullscreen>iFrames are not supported on this page.</iframe> -->
                <!-- end maps viever  -->

                <!-- maps dashboard -->
                <!-- <iframe src="https://arcgis.com/apps/dashboards/5aecfd28de7746e481e3e800596fdc30" width="1200" height="800" frameborder="0" style="border:0" allowfullscreen>iFrames are not supported on this page.</iframe> -->
                <!-- <iframe src="https://arcgis.com/apps/dashboards/5aecfd28de7746e481e3e800596fdc30" style="padding-top: 40px;" width="1200" height="800" frameborder="0" style="border:0" allowfullscreen>iFrames are not supported on this page.</iframe> -->
                <!-- end maps dashboard  -->
                <br>
                <div class="blog-comments">

                    <h4 class="comments-count">Komentar</h4>

                    <div id="comment-1" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                            <div>
                                <h5><a href="#">Adira</a> <a href="#" class="reply"></a></h5>
                                <time datetime="2020-01-01">01 Juni 2022</time>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div><!-- End comment #1 -->

                    <div id="comment-4" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                            <div>
                                <h5><a href="#">Evelin</a> <a href="#" class="reply"></a></h5>
                                <time datetime="2020-01-01">20 Juni 2022</time>
                                <p>
                                    Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                                </p>
                            </div>
                        </div>

                    </div><!-- End comment #4 -->

                    <div class="reply-form">
                        <h4>Tambahkan Komentar Anda</h4>
                        <!-- <p>Your email address will not be published. Required fields are marked * </p> -->
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>

                        </form>

                    </div>

                </div><!-- End blog comments -->
            </div>

            <!-- end maps service  -->
        </div>

    </div>
</section><!-- End Why Us Section -->
<!-- End Blog Section -->
@endsection