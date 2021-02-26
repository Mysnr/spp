@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data Kelas</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('kelas.index') }}">Data Kelas</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Tambah Data Kelas
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Tambah Kelas</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="form-group col-12">
                                <label for="inputNamaKelas">Nama Kelas</label>
                                <select name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror"
                                    value="{{ old('nama_kelas') }}">

                                    <option value="">Pilih..</option>

                                    <option value="10" {{ old('nama_kelas') == 10 ? 'selected' : '' }}>10
                                    </option>
                                    <option value="11" {{ old('nama_kelas') == 11 ? 'selected' : '' }}>11
                                    </option>
                                    <option value="12" {{ old('nama_kelas') == 12 ? 'selected' : '' }}>12
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('nama_kelas') }}
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputKompetensiKeahlian">Kompetensi Keahlian</label>
                                <select name="kompetensi_keahlian"
                                    class="form-control @error('kompetensi_keahlian') is-invalid @enderror"
                                    value="{{ old('kompetensi_keahlian') }}">

                                    <option value="">Pilih..</option>

                                    <option value="Akutansi"
                                        {{ old('kompetensi_keahlian') == 'Akutansi' ? 'selected' : '' }}> Akutansi
                                    </option>
                                    <option value="Otomatisasi Tata Kelola Perkantoran"
                                        {{ old('kompetensi_keahlian') == 'Otomatisasi Tata Kelola Perkantoran' ? 'selected' : '' }}>
                                        Otomatisasi Tata Kelola Perkantoran
                                    </option>
                                    <option value="Bisnis Daring dan Pemasaran"
                                        {{ old('kompetensi_keahlian') == 'Bisnis Daring dan Pemasaran' ? 'selected' : '' }}>
                                        Bisnis Daring dan Pemasaran
                                    </option>
                                    <option value="Akomodasi Perhotelan"
                                        {{ old('kompetensi_keahlian') == 'Akomodasi Perhotelan' ? 'selected' : '' }}>
                                        Akomodasi Perhotelan
                                    </option>
                                    <option value="Tata Boga"
                                        {{ old('kompetensi_keahlian') == 'Tata Boga' ? 'selected' : '' }}> Tata Boga
                                    </option>
                                    <option value="Multimedia"
                                        {{ old('kompetensi_keahlian') == 'Multimedia' ? 'selected' : '' }}>
                                        Multimedia
                                    </option>
                                    <option value="Rekayasa Perangkat Lunak"
                                        {{ old('kompetensi_keahlian') == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                        Rekayasa Perangkat Lunak
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('kompetensi_keahlian') }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('kelas.index') }}" class="text-primary mt-3 mr-3"
                                    style="font-weight: 600">Batal</a>
                                <button class="btn mt-2 btn-danger">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
