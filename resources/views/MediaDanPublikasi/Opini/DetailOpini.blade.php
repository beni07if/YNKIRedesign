@extends('Layouts.MasterWeb')

@section('title')
<title>Detail Opini Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Opini</li>
        </ol>
        @foreach($postDetail as $post)
        <h4>{{$post->judul}}</h4>
        @endforeach

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 entries">
                @foreach( $postDetail as $post )

                <article class="entry">

                    <div class="">
                        <img src="{{asset('assetAdmin/img/PostinganMedia/'.$post->foto.'')}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="">{{ $post->judul }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">YNKI</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $post->created_at}}</time></a></li>
                            <li class="d-flex align-items-center"><i class=""></i> <a href="blog-single.html">{!! $post->captionaa !!}</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            {!! $post->deskripsi !!}
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

                    <h3 class="sidebar-title">Opini Lainnya </h3>
                    <div class="sidebar-item recent-posts">
                        @foreach($postinganmedia as $post)
                        <div class="post-item clearfix">
                            <img src="{!! url('assetAdmin/img/PostinganMedia/'. $post->foto) !!}" alt="">
                            <h4><a href="{{ route('DetailOpini', $post->id) }}">{{$post->judul}}</a></h4>
                            <time datetime="2020-01-01">{{$post->created_at}}</time>
                        </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Kategori</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="{{route('ListRilis')}}">Rilis</a></li>
                            <li><a href="{{route('ListOpini')}}">Opini</a></li>
                            <li><a href="{{route('ListKabarDariLapangan')}}">Kabar Dari Lapangan</a></li>
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