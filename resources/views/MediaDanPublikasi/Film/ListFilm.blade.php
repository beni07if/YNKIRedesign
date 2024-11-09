@extends('Layouts.MasterWeb')

@section('title')
<title>Film Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li>Halaman Film</li>
        </ol>
        <h2>YNKI - Film</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <!-- <header class="section-header">
            <h2>Film</h2>
            <p>Film page</p>
        </header> -->
        <div class="row">
            @foreach($ListFilm as $film)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        <iframe width="100%" height="100%" 
                            src="{{$film->video}}" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                    <span class="post-date">{{$film->created_at}}</span>
                    <h3 class="post-title">{{$film->judul}}</h3>
                    <a href="{{Route('DetailFilm', $film->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Recent Blog Posts Section -->
@endsection