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
                            <a href="{{ route('spp.index') }}">SPP</a>
                        </li>
                        <li class="breadcrumb-item" style="color: #7a6fbe !important; font-weight: 600;">
                            Edit Data SPP
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-light">
                    <div class="card-header border-light bg-transparent text-primary">
                        <h5>Tambah Data SPP</h5>
                    </div>
                    <div class="card-body border-light">
                        <form action="{{ route('spp.store') }}" method="POST">
                            @csrf
                            <div class="form-group col-12">
                                <label for="inputTahun">Tahun</label>
                                <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun"
                                    value="{{ $spp->tahun }}" placeholder="Ex : 2020">
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('tahun') }}
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputNominal">Nominal</label>
                                <input type="number" class="form-control @error('nominal') is-invalid @enderror"
                                    value="{{ $spp->nominal }}" name="nominal" placeholder="Rp.">
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $errors->first('nominal') }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('spp.index') }}" class="text-primary mt-3 mr-3"
                                    style="font-weight: 600">Batal</a>
                                <button class="btn btn-danger mt-2">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
