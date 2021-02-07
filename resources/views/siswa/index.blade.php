@extends ('layouts.master')

@section('content')
    <div class="section-header mb-0">
        <h1>Siswa</h1>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="card">
                <div class="card-head d-flex justify-content-end px-4 pt-4">
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-1"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
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
                                    <td>{{ $siswa->kelas->nama_kelas . ' - ' . $siswa->kelas->kompetensi_keahlian }}</td>
                                    <td>
                                        <a href="{{ route('siswa.edit', ['siswa' => $siswa->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
