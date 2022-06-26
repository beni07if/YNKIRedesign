@extends('Layouts.MasterWeb')

@section('title')
<title>Team Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="#">Home</a></li>
            <li>Anggota Team YNKI</li>
        </ol>
        <h2>Anggota Team YNKI</h2><a href="{{route('StafYnki')}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Staf Lainnya</span></a>

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('MainContent')

<!-- ======= Features Section ======= -->
<section id="features" class="features">

    <div class="container">
        @foreach($staf as $team)

        <header class="section-header">
            <h2>{{$team->nama}}</h2>
            <!-- <p>Laboriosam et omnis fuga quis dolor direda fara</p> -->
        </header>

        <!-- Feature Tabs -->
        <div class="row feture-tabs">

            <div class="col-lg-6">
                <!-- <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3> -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab1">
                        <!-- <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p> -->
                        <div class="d-flex align-items-center mb-2">
                            <!-- <i class="bi bi-check2"></i> -->
                            <h4>{!!$team->jabatan!!}</h4>
                        </div>
                        <p>{!!$team->biodata!!}</p>
                    </div><!-- End Tab 1 Content -->

                </div>

            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assetAdmin/img/staf/'.$team->foto)}}" class="img-fluid" alt="">
                <!-- <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CVNg6WGLHi_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">

                </blockquote> -->
                <script async src="//www.instagram.com/embed.js"></script>
            </div>


        </div><!-- End Feature Tabs -->
        @endforeach
    </div>

</section><!-- End Features Section -->
@endsection