@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Rilis Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Rilis YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Rilis</li>
                <li class="breadcrumb-item active">Daftar Rilis</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Rilis YNKI</h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <a href="{{route('rilis.create')}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Buat Rilis Baru</span></a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Training GAP Pengelolaan Kebun Sawit untuk Petani Swadaya, Sanggau</td>
                                    <td>Adira</td>
                                    <td>12 November 2021</td>
                                    <td><a href="#"><span class="badge bg-warning"><i class="bxs-user-plus me-1"></i>Detail</span></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Training on Landscape Level Managemen (Hight Level) for KPH</td>
                                    <td>Anak buah Adira yang baru</td>
                                    <td>13 November 2021</td>
                                    <td><a href="#"><span class="badge bg-warning"><i class="bxs-user-plus me-1"></i>Detail</span></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- modal  start-->
    <div class="modal fade" id="caption" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Caption</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Caption..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- End Vertically centered Modal-->
    <!-- modal end  -->

</main><!-- End #main -->
@endsection