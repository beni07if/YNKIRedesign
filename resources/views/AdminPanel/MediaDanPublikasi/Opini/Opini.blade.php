@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Opini YNKI Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Opini YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Opini</li>
                <li class="breadcrumb-item active">Daftar Pulbikasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Opini YNKI </h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <a href="{{route('rilis.create')}}"><span class="badge bg-success"><i class="bxs-file-plus me-1"></i>Tambahkan Opini Baru</span></a>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($postinganmedia as $postingan)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$postingan->judul}}</td>
                                    <td>{{$postingan->kategori}}</td>
                                    <td>{{$postingan->created_at}}</td>
                                    <td><a href="{{route('rilis.edit', $postingan->id)}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Edit</span></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
        @include('sweetalert::alert')
    </section>

</main><!-- End #main -->
@endsection