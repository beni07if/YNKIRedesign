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
                <li class="breadcrumb-item">Staf</li>
                <li class="breadcrumb-item active">Daftar Staf</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Keluarga Besar YNKI </h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <a href="{{route('staf.create')}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Tambahkan Staf Baru</span></a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($staf as $team)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$team->nama}}</td>
                                    <td>{{$team->email}}</td>
                                    <td>{{$team->jabatan}}</td>
                                    <td><a href="{{route('staf.edit', $team->id)}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Biodata</span></a></td>
                                    <td>
                                        <form action="{{route('staf.destroy', $team->id)}}" method="post">
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