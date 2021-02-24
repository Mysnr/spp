@extends('layouts.master')

@section('breadcrumb')
    <h4 class="page-title">Kelas</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
            Kelas
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="card">
                <div class="card-head d-flex justify-content-end px-4 pt-4">

                    <div class="tambah mb-0">
                        <a href="{{ route('kelas.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus mr-1"></i> Tambah Kelas
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Kompetensi Keahlian</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelases as $kelas)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelas->nama_kelas }}</td>
                                    <td>{{ $kelas->kompetensi_keahlian }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ route('kelas.edit', ['kela' => $kelas->id]) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('kelas.destroy', ['kela' => $kelas->id]) }}"
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
