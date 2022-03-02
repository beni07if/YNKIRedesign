@extends('Layouts.MasterWeb')

@section('title')
<title>Rilis Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li>Halaman Rilis</li>
        </ol>
        <h2>Rilis YNKI</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <!-- <header class="section-header">
            <h2>Rilis</h2>
            <p>Rilis page</p>
        </header> -->
        <div class="row">
            @foreach($listRilis as $rilis)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="assetAdmin/img/PostinganMedia/{{$rilis->foto}}" class="img-fluid" alt=""></div>
                    <span class="post-date">{!! $rilis->created_at !!}</span>
                    <h3 class="post-title">{!! $rilis->judul !!}</h3>
                    <a href="{{Route('DetailRilis', $rilis->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Recent Blog Posts Section -->
@endsection