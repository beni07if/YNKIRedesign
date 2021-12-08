@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Rilis Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Rilis Baru YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('rilis.index')}}">Rilis</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambahkan Rilis Baru</h5>

                        <!-- Horizontal Form -->
                        <form method="POST" action="{{ route('rilis.store') }} " enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id_user" class="form-control" value="1" id="id_user" hidden>
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" name="judul" class="form-control" id="judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="caption" class="col-sm-3 col-form-label">Caption</label>
                                <div class="col-sm-9">
                                    <input type="text" name="caption" class="form-control" id="caption">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="captions" class="col-sm-3 col-form-label">Caption English</label>
                                <div class="col-sm-9">
                                    <input type="text" name="captions" class="form-control" id="captions">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="kategori" aria-label="Default select example">
                                        <option selected value="Rilis">Rilis</option>
                                        <option value="Opini">Opini</option>
                                        <option value="Kabar Dari Lapangan">Kabar Dari Lapangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Categories</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="categories" aria-label="Default select example">
                                        <option selected value="Release">Release</option>
                                        <option value="Opinion">Opinion</option>
                                        <option value="Kabar Dari Lapangan">Kabar Dari Lapangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="foto" type="file" id="foto">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" name="deskripsi">
                                        </textarea><!-- End TinyMCE Editor -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" name="description">
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