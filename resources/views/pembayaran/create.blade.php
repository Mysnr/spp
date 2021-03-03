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
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select name="nisn" class="form-control select2" required>
                                        <option></option>
                                        @foreach ($siswa as $item)
                                            <option value="{{ $item->nisn }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">SPP</label>
                                <div class="col-sm-10">
                                    <select name="id_spp" id="id_spp"
                                            class="form-control" required>
                                        <option value=""></option>

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
                                <label for="example-email-input" class="col-sm-2 col-form-label">Bulan Bayaran
                                    SPP</label>
                                <div class="col-sm-10">
                                    <select name="bulan_dibayar" id="bulan_bayar" class="form-control select2" required>
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
                                <label for="example-url-input" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" readonly id="total_bayar"
                                           name="total_bayar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                                <div class="col-sm-10">
                                    <input name="jumlah_bayar" class="form-control" type="text" id="jumlah_bayar"
                                           rel="jumlah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sisa-bayar" class="col-sm-2 col-form-label">Sisa Bayar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="sisa-bayar" name="sisa_bayar" readonly>
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
    <script src="{{ asset('/assets/plugins/select2/js/select2.js') }}"></script>
    <script src="{{ asset('/assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <script>
        let nominal, id_spp;
        $("form").parsley()

        $("#id_spp").on('change', function () {
            id_spp = this.value
            nominal = $("option:selected", this).attr('data-harga')
        })

        $("#bulan_bayar").on('change', function () {
            $("#total_bayar").val(nominal)
        })

        $("#jumlah_bayar").on('keyup', function () {
            let total = remove_format($("#total_bayar").val())
            let awal = 0

            $("input[rel=jumlah]").each(function () {
                this.value = remove_format(this.value)
                if (this.value != '') awal += parseInt(this.value, 10);
            })

            let totalpembayaran = total - awal;
            let dibayar = format_number(awal)
            let change = awal - remove_format(total)

            $("#jumlah_bayar").val(dibayar)
            $("#sisa-bayar").val(totalpembayaran < 0 ? 0 : format_number(totalpembayaran))

        })

        function remove_format(number) {
            return number.toString().replace(/[^0-9]/g, '')
        }

        function format_number(number) {
            return number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

    </script>
@endsection
