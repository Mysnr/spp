@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
<!-- DataTables -->
<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />

<link
    href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css') }}"
    rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Welcome to Lexa Dashboard
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

    @role('admin')
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right"></i>
                        </div>
                        <div class="text-white">
                            <h6 class="text-uppercase mb-3">Orders</h6>
                            <h4 class="mb-4">1,587</h4>
                            <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-buffer float-right"></i>
                        </div>
                        <div class="text-white">
                            <h6 class="text-uppercase mb-3">Revenue</h6>
                            <h4 class="mb-4">$46,782</h4>
                            <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous
                                period</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-tag-text-outline float-right"></i>
                        </div>
                        <div class="text-white">
                            <h6 class="text-uppercase mb-3">Average Price</h6>
                            <h4 class="mb-4">$15.9</h4>
                            <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-briefcase-check float-right"></i>
                        </div>
                        <div class="text-white">
                            <h6 class="text-uppercase mb-3">Product Sold</h6>
                            <h4 class="mb-4">1890</h4>
                            <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @role('siswa')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="card-head d-flex justify-content-end px-4 pt-4">
                    </div>
                    <div class="card-body">
                        <table class="table datatable" id="datatable-buttons">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">NISN Siswa</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">SPP</th>
                                    <th scope="col">Jumlah Bayar</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($historiSiswa as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->id_petugas }}</td>
                                        <td>{{ $pembayaran->siswa->nisn }}</td>
                                        <td>{{ $pembayaran->siswa->nama }}</td>
                                        <td>{{ $pembayaran->spp->tahun . ' - ' . $pembayaran->spp->nominal . ' ' . $pembayaran->bulan_dibayar }}
                                        </td>
                                        <td>{{ $pembayaran->jumlah_bayar }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('pembayaran.edit', ['pembayaran' => $pembayaran->id]) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form
                                                    action="{{ route('pembayaran.destroy', ['pembayaran' => $pembayaran->id]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger mx-1 btn-hapus">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    <!-- end row -->

</div> <!-- container-fluid -->
@endsection


@section('script')
<script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}">
</script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}">
</script>
<!-- Buttons examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}">
</script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}">
</script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}">
</script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}">
</script>


<script>
    $(document).ready(function () {
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });

    $('.btn-hapus').on('click', function (event) {
        event.preventDefault()
        let deleteForm = this.parentElement
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d95a6f',
            cancelButtonColor: '#7a6fbe',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                deleteForm.submit()
            }
        })
    })

</script>
@endsection
