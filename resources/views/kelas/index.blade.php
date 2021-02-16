@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Kelas</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Kelas
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
                            <a href="{{ route('kelas.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus mr-1"></i> Tambah
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
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('kelas.destroy', ['kela' => $kelas->id]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm mx-1 btn-hapus">hapus</button>
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
