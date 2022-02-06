@extends('Layouts.MasterWeb')

@section('title')
<title>Program Strategi Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Program Strategi</li>
        </ol>
        <h2>Program Strategi YNKI</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Program Strategi</h2>
            <p>Program Strategi page</p>
        </header>
        <div class="row">
            @foreach($ListProgramStrategi as $ProgramStrategi)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="assetAdmin/img/PostinganMedia/{{$ProgramStrategi->foto}}" class="img-fluid" alt=""></div>
                    <span class="post-date">{{$PStrategi->created_at}}</span>
                    <h3 class="post-title">{{$PStrategi->judul}}</h3>
                    <a href="{{Route('DetailListProgramStrategi', $PStrategi->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Recent Blog Posts Section -->
@endsection