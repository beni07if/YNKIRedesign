@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Pesan Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pesan untuk YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Pesan</li>
                <li class="breadcrumb-item active">Daftar Pesan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pesan untuk YNKI </h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <!-- <a href="{{route('staf.create')}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Tambahkan Staf Baru</span></a> -->
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($pesan as $psn)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$psn->name}}</td>
                                    <td>{{$psn->email}}</td>
                                    <td>{{$psn->subject}}</td>
                                    <td>{{$psn->pesan}}</td>
                                    <!-- <td><a href="{{route('staf.edit', $psn->id)}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Pesan</span></a></td> -->
                                    <td>
                                        <form action="{{route('pesan.destroy', $psn->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="badge bg-danger">Hapus</button>
                                        </form>
                                    </td>
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