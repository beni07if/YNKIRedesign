@extends('Layouts.MasterWeb')

@section('title')
<title>Detail Film Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="#">Home</a></li>
            <li>Film</li>
        </ol>
        @foreach($film as $filmm)
        <h4>{{$filmm->judul}}</h4>
        @endforeach

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 entries">
                @foreach( $film as $filmm )

                <article class="entry">

                    {{-- <div class="">
                        <img src="{{asset('assetAdmin/img/PostinganMedia/'.$filmm->foto.'')}}" alt="" class="img-fluid">
                    </div> --}}
                    <div>
                        <iframe width="100%" height="500px" 
                            src="{{$filmm->video}}" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div><br>
                    
                    <h2 class="entry-title">
                        <a href="">{{ $filmm->judul }}</a>
                    </h2>
                    
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center text-muted"><i class="bi bi-person"></i> YNKI</li>
                            <li class="d-flex align-items-center text-muted"><i class="bi bi-clock"></i><time datetime="2020-01-01">{{ $filmm->created_at}}</time></li>
                            <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                        </ul><br>
                        <p class="text-muted">
                            {!! $filmm->caption !!}
                        </p>
                    </div>

                    <div class="entry-content">
                        <p>
                            {!! $filmm->deskripsi !!}
                        </p>
                        <!-- <div class="read-more">
                            <a href="#">Read More</a>
                        </div> -->
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

                    <!-- <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div> -->
                    <!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Film Lainnya </h3>
                    <div class="sidebar-item recent-posts">
                        @foreach($films as $film)
                        <div class="post-item clearfix" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                            <!-- Kolom Video -->
                            <div class="video-column" style="flex: 0 0 auto; width: 120px; height: 68px;">
                                <iframe src="{{$film->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 100%;"></iframe>
                            </div>
                            <!-- Kolom Konten (judul dan tanggal) -->
                            <div class="content-column" style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 5px;">
                                <h4 style="margin: 0; font-size: 16px; font-weight: bold;">
                                    <a href="{{ route('DetailFilm', $film->id) }}">{{$film->judul}}</a>
                                </h4>
                                <time datetime="2020-01-01" style="font-size: 12px; color: #888; margin: 0;">
                                    {{$film->created_at}}
                                </time>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Kategori</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="{{ route('ListRilis') }}">Rilis</a></li>
                            <li><a href="{{ route('ListOpini') }}">Opini</a></li>
                            <li><a href="{{ route('ListFilm') }}">Film</a></li>
                            <li><a href="{{ route('ListKabarDariLapangan') }}">Kabar Dari Lapangan</a></li>
                            <li><a href="#">Karakteristik Lanskap</a></li>
                            <li><a href="#">Teory of Change</a></li>
                            <li><a href="#">Library</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
    <!-- </section> -->
    <!-- End Blog Section -->
    @endsection