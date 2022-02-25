@extends('Layouts.MasterAdminPanel')

@section('title')
<title>Mitra Kerja Page</title>
@endsection

@section('MainContent')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mitra Kerja YNKI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Mitra Kerja</li>
                <li class="breadcrumb-item active">Daftar Mitra Kerja</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Mitra Kerja YNKI </h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                        <a href="{{route('mitra.create')}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Tambahkan Mitra Kerja Baru</span></a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Mitra</th>
                                    <th scope="col">Logo Mitra</th>
                                    <th scope="col">Mulai Kerjasama</th>
                                    <th scope="col">Selesai Kerjasama</th>
                                    <th scope="col">Contact Person</th>
                                    <!-- <th scope="col">Bidang Teknis</th> -->
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($mitrakerja as $mitra)
                                <?php $no++; ?>
                                <tr>
                                    <td>{!!$no!!}</td>
                                    <td>{!!$mitra->nama_mitra!!}</td>
                                    <td>{!!$mitra->logo_mitra!!}</td>
                                    <td>{!!$mitra->waktu_mulai!!}</td>
                                    <td>{!!$mitra->waktu_selesai!!}</td>
                                    <td>{!!$mitra->email!!}</td>
                                    <!-- <td>{!!$mitra->bidang_teknis!!}</td> -->
                                    <td><a href="{{route('mitra.edit', $mitra->id)}}"><span class="badge bg-info"><i class="bxs-user-plus me-1"></i>Edit</span></a></td>
                                    <td>
                                        <form action="{{route('mitra.destroy', $mitra->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="badge bg-danger">Hapus</button>
                                            <!-- <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $mitra->id }}" data-action="{{ route('mitra.destroy',$mitra->id) }}" onclick="deleteConfirmation({{$mitra->id}})"> Delete</button> -->
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

<!-- <script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Hapus!",
            text: "Yakin ingin menghapus?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Hapus!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function(e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/mitra')}}/" + id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function(results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function(dismiss) {
            return false;
        });
    }
</script> -->