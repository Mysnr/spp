@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="page-title">Pembayaran</div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            Pembayaran
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('pembayaran.index') }}">History Pembayaran</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Edit Pembayaran
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card corder-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Edit Pembayaran</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="inputSiswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select name="nisn" class="form-control select2 @error('nisn') is-invalid @enderror"
                                        value="{{ $pembayaran->nisn }}">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('nisn') }}
                                        </div>

                                        @foreach ($siswa as $item)
                                            <option value="{{ $pembayaran->nisn == $item->nisn ? 'selected' : '' }}">
                                                {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">SPP</label>
                                <div class="col-sm-10">
                                    <select name="id_spp" id="id_spp"
                                        class="form-control @error('id_spp') is-invalid @enderror"
                                        value="{{ $pembayaran->id_spp }}">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('id_spp') }}
                                        </div>

                                        @foreach ($spp as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $pembayaran->id_spp == $item->id ? 'selected' : '' }}>
                                                {{ $item->tahun . ' - ' . $item->nominal }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Bulan Bayaran SPP</label>
                                <div class="col-sm-10">
                                    <select name="bulan_dibayar" id="bulan_bayar"
                                        class="form-control select2 @error('bulan_dibayar') is-invalid @enderror"
                                        value="{{ $pembayaran->bulan_dibayar }}">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('bulan_dibayar') }}
                                        </div>

                                        <option value="Januari"
                                            {{ $pembayaran->bulan_dibayar == 'Januari' ? 'selected' : '' }}>
                                            Januari
                                        </option>
                                        <option value="Februari"
                                            {{ $pembayaran->bulan_dibayar == 'Februari' ? 'selected' : '' }}>
                                            Februari
                                        </option>
                                        <option value="Maret"
                                            {{ $pembayaran->bulan_dibayar == 'Maret' ? 'selected' : '' }}>
                                            Maret
                                        </option>
                                        <option value="April"
                                            {{ $pembayaran->bulan_dibayar == 'April' ? 'selected' : '' }}>
                                            April
                                        </option>
                                        <option value="Mei" {{ $pembayaran->bulan_dibayar == 'Mei' ? 'selected' : '' }}>
                                            Mei
                                        </option>
                                        <option value="Juni"
                                            {{ $pembayaran->bulan_dibayar == 'Juni' ? 'selected' : '' }}>Juni
                                        </option>
                                        <option value="Juli"
                                            {{ $pembayaran->bulan_dibayar == 'Juli' ? 'selected' : '' }}>Juli
                                        </option>
                                        <option value="Agustus"
                                            {{ $pembayaran->bulan_dibayar == 'Agustus' ? 'selected' : '' }}>
                                            Agustus
                                        </option>
                                        <option value="September"
                                            {{ $pembayaran->bulan_dibayar == 'September' ? 'selected' : '' }}>September
                                        </option>
                                        <option value="Oktober"
                                            {{ $pembayaran->bulan_dibayar == 'Oktober' ? 'selected' : '' }}>
                                            Oktober
                                        </option>
                                        <option value="November"
                                            {{ $pembayaran->bulan_dibayar == 'November' ? 'selected' : '' }}>
                                            November
                                        </option>
                                        <option value="Desember"
                                            {{ $pembayaran->bulan_dibayar == 'Desember' ? 'selected' : '' }}>
                                            Desember
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" readonly id="total_bayar" name="jumlah_bayar"
                                        value="{{ $pembayaran->jumlah_bayar }}">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('pembayaran.index') }}" class="text-primary my-2 mr-3"
                                    style="font-weight: 600">Batal</a>
                                <button class="btn mb-3 mr-3 btn-danger">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/plugins/select2/js/select2.min.js"></script>
    <script>
        let total_bayar;

        $('#bulan_bayar').on('change', function() {
            const harga = $("#id_spp :selected").attr('data-harga')
            $("#total_bayar").val(harga)
        })

    </script>
@endsection
