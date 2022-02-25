@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Mitra Kerja Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mitra Kerja Baru YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mitra Kerja</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambahkan Data Mitra Kerja</h5>

                        <!-- Horizontal Form -->
                        <form method="POST" action="{{ route('mitra.store') }} " enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama_mitra" class="col-sm-3 col-form-label">Nama Mitra</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="logo_mitra" class="col-sm-3 col-form-label">Logo Mitra</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="logo_mitra" type="file" id="logo_mitra">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktu_mulai" class="col-sm-3 col-form-label">Waktu Mulai</label>
                                <div class="col-sm-9">
                                    <input type="date" name="waktu_mulai" class="form-control" id="waktu_mulai">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktu_selesai" class="col-sm-3 col-form-label">Waktu Selesai</label>
                                <div class="col-sm-9">
                                    <input type="date" name="waktu_selesai" class="form-control" id="waktu_selesai">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="contoh@gmail.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bidang_teknis" class="col-sm-3 col-form-label">Bidang Teknis</label>
                                <div class="col-sm-9">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" name="bidang_teknis">
                                        </textarea><!-- End TinyMCE Editor -->
                                </div>
                            </div>
                            <br><br><br><br><br>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                        </form><!-- End Horizontal Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection