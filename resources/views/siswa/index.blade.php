@extends ('layouts.master')

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
                    <h4 class="page-title">Data Siswa</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Data Siswa
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
                            <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus mr-1"></i> Tambah Siswa
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaes as $siswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->kelas->nama_kelas . ' - ' . $siswa->kelas->kompetensi_keahlian }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('siswa.edit', ['siswa' => $siswa->id]) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('siswa.destroy', ['siswa' => $siswa->id]) }}"
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
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $("#datatable").DataTable();
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
