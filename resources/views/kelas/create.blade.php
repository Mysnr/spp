@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Siswa</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('kelas.index') }}">Kelas</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Tambah Kelas
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text primary">
                        <h5>Tambah Kelas</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="inputNamaKelas">Nama Kelas</label>
                                    <select name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror"
                                        value="{{ old('nama_kelas') }}">

                                        <option value="">Pilih..</option>

                                        @foreach ($kelases as $kelas)
                                            <option value="10" {{ old('nama_kelas') === 11 ? 'selected' : '' }}>10
                                            </option>
                                            <option value="11" {{ old('nama_kelas') === 11 ? 'selected' : '' }}>11
                                            </option>
                                            <option value="12" {{ old('nama_kelas') === 11 ? 'selected' : '' }}>12
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputKompetensiKeahlian">Kompetensi Keahlian</label>
                                    <select name="kompetensi_keahlian"
                                        class="form-control @error('kompetensi_keahlian') is-invalid @enderror"
                                        value="{{ old('kompetensi_keahliah') }}">

                                        <option value="" disabled>Pilih..</option>

                                        <option value="Akutansi"
                                            {{ old('kompetensi_keahlian') === Akutansi ? 'selected' : '' }}> Akutansi
                                        </option>
                                        <option value="Otomatisasi Tata Kelola Perkantoran"
                                            {{ old('kompetensi_keahlian') === Otomatisasi_Tata_Kelola_Perkantoran ? 'selected' : '' }}>
                                            Otomatisasi Tata Kelola Perkantoran
                                        </option>
                                        <option value="Akutansi"
                                            {{ old('kompetensi_keahlian') === Akutansi ? 'selected' : '' }}> Akutansi
                                        </option>
                                        <option value="Akutansi"
                                            {{ old('kompetensi_keahlian') === Akutansi ? 'selected' : '' }}> Akutansi
                                        </option>
                                        <option value="Akutansi"
                                            {{ old('kompetensi_keahlian') === Akutansi ? 'selected' : '' }}> Akutansi
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
