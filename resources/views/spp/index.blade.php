@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">SPP</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            SPP
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="card-head d-flex justify-content-end px-4 pt-4">

                        <div class="tambah mb-0">
                            <a href="{{ route('spp.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus mr-1"></i> Tambah SPP
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($spps as $spp)
                                    <tr>
                                        <td style="width: 10%">{{ $loop->iteration }}</td>
                                        <td style="width: 30%">{{ $spp->tahun }}</td>
                                        <td style="width: 30%">{{ $spp->nominal }}</td>
                                        <td style="width: 30%">
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('spp.edit', ['spp' => $spp->id]) }}"
                                                    class="btn btn-danger">Edit</a>
                                                <form action="{{ route('spp.destroy', ['spp' => $spp->id]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-primary mx-1 btn-hapus">Hapus</button>
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

@section('script')
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

@endsection
