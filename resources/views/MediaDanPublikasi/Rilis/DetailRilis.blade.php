@extends('Layouts.MasterWeb')

@section('title')
<title>Detail Rilis Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Rilis</li>
        </ol>
        <h2>Halaman Rilis</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container">

        <header class="section-header">
            <h2>Rilis</h2>
            <p>Detail rilis page</p>
        </header>

        <div class="row">
            @foreach($detailRilis as $rilis)

            <div class="col-lg-3">
                <div class="post-box">
                    <div class="post-img"><img src="assetAdmin/img/PostinganMedia/{{$rilis->foto}}" class="img-fluid" alt=""></div>
                    <span class="post-date">{{$rilis->created_at}}</span>
                    <h3 class="post-title">{{$rilis->judul}}</h3>
                    <a href="{{Route('DetailRilis', $rilis->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection