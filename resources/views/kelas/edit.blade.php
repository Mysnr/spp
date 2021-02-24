@extends('layouts.master')

@section('breadcrumb')
    <h4 class="page-title">Kelas</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('kelas.index') }}">Kelas</a>
        </li>
        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
            Edit Kelas
        </li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Edit Siswa</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputNamaKelas">Nama Kelas</label>
                                <select name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror">

                                    <option value="10" {{ $kelas->nama_kelas == 10 ? 'selected' : '' }}>10
                                    </option>
                                    <option value="11" {{ $kelas->nama_kelas == 11 ? 'selected' : '' }}>11
                                    </option>
                                    <option value="12" {{ $kelas->nama_kelas == 12 ? 'selected' : '' }}>12
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('nama_kelas') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputKompetensiKeahlian">Kompetensi Keahlian</label>
                                <select name="kompetensi_keahlian"
                                    class="form-control @error('kompetensi_keahlian') is-invalid @enderror"
                                    value="{{ old('kompetensi_keahlian') }}">

                                    <option value="">Pilih..</option>

                                    <option value="Akutansi" {{ $kelas->kompetensi_keahlian ? 'selected' : '' }}>
                                    </option>
                                    <option value="Otomatisasi Tata Kelola Perkantoran"
                                        {{ $kelas->kompetensi_keahlian == 'Otomatisasi Tata Kelola Perkantoran' ? 'selected' : '' }}>
                                        Otomatisasi Tata Kelola Perkantoran
                                    </option>
                                    <option value="Bisnis Daring dan Pemasaran"
                                        {{ $kelas->kompetensi_keahlian == 'Bisnis Daring dan Pemasaran' ? 'selected' : '' }}>
                                        Bisnis Daring dan Pemasaran
                                    </option>
                                    <option value="Akomodasi Perhotelan"
                                        {{ $kelas->kompetensi_keahlian == 'Akomodasi Perhotelan' ? 'selected' : '' }}>
                                        Akomodasi Perhotelan
                                    </option>
                                    <option value="Tata Boga"
                                        {{ $kelas->kompetensi_keahlian == 'Tata Boga' ? 'selected' : '' }}>
                                        Tata Boga
                                    </option>
                                    <option value="Multimedia"
                                        {{ $kelas->kompetensi_keahlian == 'Multimedia' ? 'selected' : '' }}>
                                        Multimedia
                                    </option>
                                    <option value="Rekayasa Perangkat Lunak"
                                        {{ $kelas->kompetensi_keahlian == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                        Rekayasa Perangkat Lunak
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('kompetensi_keahlian') }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn mt-2 btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
