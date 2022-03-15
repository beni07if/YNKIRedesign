@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Profil Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profil </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Profil</li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2>{{Auth::user()->name}}</h2>
                            <h3>Team Koms YNKI</h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                                @if (session('error'))
                                <div class="alert alert danger" role="alert">
                                    {{ session('error') }}
                                </div>
                                @endif

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <!-- Change Password Form -->
                                    <form method="POST" action="{{ route('ChangePasswordSubmit') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newPassword" type="password" class="form-control" id="newPassword">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                            </div>
                                        </div> -->

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-sm swalPasswordSuccess">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Formm -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
            @include('sweetalert::alert')
        </section>
    </section>

</main><!-- End #main -->
@endsection