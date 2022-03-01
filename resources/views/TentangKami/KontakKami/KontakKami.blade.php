@extends('Layouts.MasterWeb')

@section('title')
<title>Kontak Kami Page</title>
@endsection

@section('slideShow')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li>Halaman Kontak Kami</li>
        </ol>
        <h2>Halaman Kontak Kami</h2>

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('MainContent')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak Kami</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Alamat:</h4>
                        <p>Jalan Karna Sosial No.88 Kota Pontianak</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>sekretariat@naturalkapital.or.id</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telephone:</h4>
                        <p>+628 9829 5053 1</p>
                    </div>

                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8166845807646!2d109.31833541526026!3d-0.05188253554095343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5926ff9397b3%3A0x90663a125c803dde!2sYayasan%20Natural%20Kapital!5e0!3m2!1sid!2sid!4v1636959219278!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
                </div>

            </div>


            <div class="col-lg-7">

                <div class="info">
                    <!-- <div class="card-body"> -->
                    <h5 class="card-title">Kirim Pesan ke YNKI</h5>

                    <!-- General Form Elements -->
                    <form method="POST" action="{{ route('KirimPesan') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="pesan" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                    <!-- </div> -->
                </div>

            </div>

        </div>

    </div>
    @include('sweetalert::alert')
</section><!-- End Contact Section -->
@endsection