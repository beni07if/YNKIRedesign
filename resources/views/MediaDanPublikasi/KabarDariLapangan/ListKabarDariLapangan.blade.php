@extends('Layouts.MasterWeb')

@section('title')
<title>KabarDariLapangan Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Kabar Dari Lapangan</li>
        </ol>
        <h2>YNKI - Kabar Dari Lapangan</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Kabar Dari Lapangan</h2>
            <p>Kabar Dari Lapangan page</p>
        </header>
        <div class="row">
            @foreach($listKabarDariLapangan as $lapangan)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="assetAdmin/img/PostinganMedia/{{$lapangan->foto}}" class="img-fluid" alt=""></div>
                    <span class="post-date">{{$lapangan->created_at}}</span>
                    <h3 class="post-title">{{$lapangan->judul}}</h3>
                    <a href="{{Route('DetailKabarDariLapangan', $lapangan->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Recent Blog Posts Section -->
@endsection