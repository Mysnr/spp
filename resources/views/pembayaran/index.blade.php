@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Entri Pembayaran SPP</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Entri Pembayaran SPP
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="card-head d-flex justify-content-end px-4 pt-4">
                        <div class="tambah mb-0">
                            <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus mr-1"></i> Entri Pembayaran
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">NISN Siswa</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">SPP</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembayarans as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->id_petugas }}</td>
                                        <td>{{ $pembayaran->siswa->nisn }}</td>
                                        <td>{{ $pembayaran->siswa->nama }}</td>
                                        <td>{{ $pembayaran->spp->tahun . ' - ' . $pembayaran->spp->nominal }}</td>
                                        <td>{{ $pembayaran->tgl_bayar . ' ' . $pembayaran->bulan_dibayar . ' ' . $pembayaran->tahun_dibayar }}
                                        </td>
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
    </div>
@endsection

{{-- @section('script')
    <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    <script>
        $(".datatable").dataTable()
        $('.btn-hapus').on('click', function(event) {
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
@endsection --}}
