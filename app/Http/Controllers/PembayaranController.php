<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePembayaranRequest;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = Pembayaran::all();
        $users = User::all();

        return view('pembayaran.index', compact('pembayarans', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $spp = Spp::all();

        return view('pembayaran.create', compact('siswa', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembayaranRequest $request)
    {
        // $message = [
        //     'required' => ':attribute harus di isi',
        //     'numeric' => ':attribute harus berupa angka',
        //     'min' => ':attribute minimal harus :min angka',
        //     'max' => ':attribute maksimal harus :max angka',
        // ];
        $input = $request->validated();
        $input['id_petugas'] = auth()->user()->id;
        $input['tgl_bayar'] = now();

        Pembayaran::create($input);
        return redirect()->route('pembayaran.index')->with('success', 'Entri Pembayaran SPP Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $siswa = Siswa::all();
        $spp = Spp::all();

        return view('pembayaran.edit', compact('pembayaran', 'siswa', 'spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayarans = Pembayaran::findOrFail();
        $pembayarans->delete();

        return redirect()->route('pembayaran.index')->with('success', $pembayarans->siswa->nama . ' Berhasil Di Hapus');
    }
}
