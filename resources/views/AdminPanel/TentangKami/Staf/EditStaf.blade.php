@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Team Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Staf YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('StafYnki')}}">Staf</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data Staf</h5>

                        <!-- Horizontal Form -->
                        <form method="POST" action="{{ route('staf.update', $staf->id) }} " enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" id="nama" value="{{$staf->nama}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="email" value="{{$staf->email}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{$staf->alamat}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                        <option selected value="{{$staf->nama}}">{{$staf->jenis_kelamin}}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan di YNKI</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$staf->jabatan}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_hp" class="col-sm-3 col-form-label">No HP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{$staf->no_hp}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="foto" type="file" id="foto" value="{{$staf->foto}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-3 col-form-label">Biodata</label>
                                <div class="col-sm-9">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" name="biodata">
                                        <p>{{ $staf->biodata }}</p>
                                        </textarea><!-- End TinyMCE Editor -->
                                </div>
                            </div>
                            <div class="row mb-3" hidden>
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" value="ynki2019" name="password" class="form-control" id="password">
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