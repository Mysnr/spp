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
                        <li class="breadcrumb-item">
                            <a href="{{ route('pembayaran.index') }}">Entri Pembayaran SPP</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Entri Pembayaran
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Entri Pembayaran SPP</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('pembayaran.store') }}" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNISN">NISN Siswa</label>
                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror"
                                        value="{{ old('nisn') }}">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('nisn') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNama">SPP</label>
                                    <select name="id_spp" class="form-control @error('id_spp') is-invalid @enderror"
                                        value="{{ old('id_spp') }}">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('id_spp') }}
                                        </div>
                                        <option value="">Pilih</option>

                                        @foreach ($spps as $spp)
                                            <option value="{{ $spp->id }}"
                                                {{ old('id_spp') == $spp->id ? 'selected' : '' }}>
                                                {{ $spp->tahun . ' - ' . $spp->nominal }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnama">Nama Siswa</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ old('nama') }}">
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('nama') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputTanggal">Tanggal</label>
                                    <input type="number" maxlength="31" minlength="1"
                                        class="form-control @error('tgl_bayar') is-invalid @enderror"
                                        value="{{ old('tgl_bayar') }}">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('tgl_bayar') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputBulan">Bulan</label>
                                    <select name="bulan_dibayar"
                                        class="form-control @error('bulan_dibayar') is-invalid @enderror">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('id_spp') }}
                                        </div>
                                        <option value="">Pilih</option>

                                        <option value="Januari"
                                            {{ old('bulan_dibayar') == 'Januari' ? 'selected' : '' }}>Januari
                                        </option>
                                        <option value="Februari"
                                            {{ old('bulan_dibayar') == 'Februari' ? 'selected' : '' }}>Februari
                                        </option>
                                        <option value="Maret" {{ old('bulan_dibayar') == 'Maret' ? 'selected' : '' }}>
                                            Maret
                                        </option>
                                        <option value="April" {{ old('bulan_dibayar') == 'April' ? 'selected' : '' }}>
                                            April
                                        </option>
                                        <option value="Mei" {{ old('bulan_dibayar') == 'Mei' ? 'selected' : '' }}>Mei
                                        </option>
                                        <option value="Juni" {{ old('bulan_dibayar') == 'Juni' ? 'selected' : '' }}>Juni
                                        </option>
                                        <option value="Juli" {{ old('bulan_dibayar') == 'Juli' ? 'selected' : '' }}>Juli
                                        </option>
                                        <option value="Agustus"
                                            {{ old('bulan_dibayar') == 'Agustus' ? 'selected' : '' }}>Agustus
                                        </option>
                                        <option value="September"
                                            {{ old('bulan_dibayar') == 'September' ? 'selected' : '' }}>September
                                        </option>
                                        <option value="Oktober"
                                            {{ old('bulan_dibayar') == 'Oktober' ? 'selected' : '' }}>Oktober
                                        </option>
                                        <option value="November"
                                            {{ old('bulan_dibayar') == 'November' ? 'selected' : '' }}>November
                                        </option>
                                        <option value="Desember"
                                            {{ old('bulan_dibayar') == 'Desember' ? 'selected' : '' }}>Desember
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputTahun">Tahun</label>
                                    <input type="number" class="form-control @error('tahun_dibayar') is-invalid @enderror"
                                        value="{{ old('tahun_dibayar') }}">
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $errors->first('tahun_dibayar') }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                    <a href="{{ route('pembayaran.index') }}" class="text-primary mt-3 mr-3"
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
