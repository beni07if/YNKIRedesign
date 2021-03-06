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
            <li>Team YNKI</li>
        </ol>
        <h2>Keluarga Besar YNKI</h2>

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('MainContent')
<!-- ======= Team Section ======= -->
<section id="team" class="team">

    <div class="container" data-aos="fade-up">

        <div class="row gy-4">
            @foreach($staf as $team)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <!-- <img src="{!!$team->embedded_boto!!}" alt=""> -->
                        <img src="assetAdmin/img/staf/{{$team->foto}}" class="img-fluid" alt="">
                        <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                    </div><br>
                    <div>
                        <h4><a href="{{route('DetailStaf', $team->id)}}">{!!$team->nama!!}</a></h4>
                        <span>{!!$team->jabatan!!}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section><!-- End Team Section -->
@endsection