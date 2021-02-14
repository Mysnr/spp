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
                            <a href="{{ route('siswa.index') }}">Siswa</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Edit Siswa
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Edit Siswa</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNISN">NISN</label>
                                    <input type="number"
                                        class="form-control @error('nisn') is-invalid
                                                                                                                                                                                                            @enderror"
                                        value="{{ $siswa->nisn }}" name="nisn" placeholder="NISN">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('nisn') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNIS">NIS</label>
                                    <input type="number"
                                        class="form-control @error('nis') is-invalid
                                                                                                                                                                                                            @enderror"
                                        value="{{ $siswa->nis }}" name="nis" placeholder="NIS">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('nis') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNama">Nama</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid
                                                                                                                                                                                                            @enderror"
                                    value="{{ $siswa->nama }}">
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('nama') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputAlamat">Alamat</label>
                                <input type="text"
                                    class="form-control @error('alamat') is-invalid
                                                                                                                                                                                                            @enderror"
                                    value="{{ $siswa->alamat }}" name="alamat" placeholder="">
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('alamat') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputTelp">No. Telepon</label>
                                    <input type="tel"
                                        class="form-control @error('no_telp') is-invalid
                                                                                                                                                                                                            @enderror"
                                        value="{{ $siswa->no_telp }}" name="no_telp" placeholder="+62">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('no_telp') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputKelas">Kelas</label>
                                    <select name="id_kelas"
                                        class="form-control @error('id_kelas') is-invalid
                                                                                                                                                                                                            @enderror"
                                        value="{{ $siswa->id_kelas }}">

                                        @foreach ($kelases as $kelas)
                                            <option value="{{ $kelas->id }}"
                                                {{ $siswa->id_kelas == $kelas->id ? 'selected' : '' }}>
                                                {{ $kelas->nama_kelas . ' ' . $kelas->kompetensi_keahlian }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('id_kelas') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">SPP</label>
                                    <select name="id_spp"
                                        class="form-control @error('id_spp') is-invalid
                                                                                                                                                                                                            @enderror"
                                        value="$siswa->id_spp">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('id_spp') }}
                                        </div>

                                        @foreach ($spps as $spp)
                                            <option value="{{ $spp->id }}"
                                                {{ $siswa->id_spp == $spp->id ? 'selected' : '' }}>
                                                {{ $spp->tahun . ' - ' . $spp->nominal }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('id_kelas') }}
                                    </div>
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
