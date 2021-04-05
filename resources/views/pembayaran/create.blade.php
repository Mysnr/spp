@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}">
@endsection

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
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2 @error('nisn') is-invalid @enderror" style="">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('nisn') }}
                                        </div>
                                        <option>Pilih</option>

                                        @foreach ($siswa as $item)
                                            <option value="{{ $item->nisn }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">SPP</label>
                                <div class="col-sm-10">
                                    <select name="id_spp" id="id_spp"
                                        class="form-control @error('id_spp') is-invalid @enderror"
                                        value="{{ old('id_spp') }}">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('id_spp') }}
                                        </div>
                                        <option value="">Pilih</option>

                                        @foreach ($spp as $item)
                                            <option value="{{ $item->id }}" data-harga="{{ $item->nominal }}"
                                                {{ old('id_item') == $item->id ? 'selected' : '' }}>
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
                                        class="form-control select2 @error('bulan_dibayar') is-invalid @enderror">
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $errors->first('bulan_dibayar') }}
                                        </div>
                                        <option value="">Pilih</option>

                                        <option value="Januari"
                                            {{ old('bulan_dibayar') == 'Januari' ? 'selected' : '' }}>
                                            Januari
                                        </option>
                                        <option value="Februari"
                                            {{ old('bulan_dibayar') == 'Februari' ? 'selected' : '' }}>
                                            Februari
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
                                            {{ old('bulan_dibayar') == 'Agustus' ? 'selected' : '' }}>
                                            Agustus
                                        </option>
                                        <option value="September"
                                            {{ old('bulan_dibayar') == 'September' ? 'selected' : '' }}>September
                                        </option>
                                        <option value="Oktober"
                                            {{ old('bulan_dibayar') == 'Oktober' ? 'selected' : '' }}>
                                            Oktober
                                        </option>
                                        <option value="November"
                                            {{ old('bulan_dibayar') == 'November' ? 'selected' : '' }}>
                                            November
                                        </option>
                                        <option value="Desember"
                                            {{ old('bulan_dibayar') == 'Desember' ? 'selected' : '' }}>
                                            Desember
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" readonly id="total_bayar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('jumlah_bayar') is-invalid @enderror" type="text"
                                        id="jumlah_bayar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-sm-2 col-form-label">Sisa Bayar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" readonly id="sisa_bayar">
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
    </div>
@endsection

@section('script')
    <script src="/assets/plugins/select2/js/select2.min.js"></script>
    <script>
        let total_bayar;

        $('#bulan_dibayar').on('change', function() {})

    </script>
@endsection
