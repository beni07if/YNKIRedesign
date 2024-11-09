@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Film YNKI Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Film YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Film</li>
                <li class="breadcrumb-item active">Daftar Film</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Film YNKI </h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <a href="{{route('film.create')}}"><span class="badge bg-success"><i class="bxs-file-plus me-1"></i>Tambahkan Film Baru</span></a>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($film as $films)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$films->judul}}</td>
                                    <td>{{$films->kategori}}</td>
                                    <td>{{$films->created_at}}</td>
                                    <td>
                                        <a href="{{ route('film.edit', $films->id) }}">
                                            <span class="badge bg-info">
                                                <i class="bxs-user-plus me-1"></i>Edit
                                            </span>
                                        </a>
                                    </td>
                                    <td>
                                        <!-- Delete Form -->
                                        <form action="{{ route('film.destroy', $films->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this film?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge bg-danger">
                                                <i class="bxs-trash"></i> Delete
                                            </button>
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