<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelases = Kelas::all();

        return view('kelas.index', compact('kelases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelases = Kelas::all();

        return view('kelas.create', compact('kelases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKelasRequest $request)
    {
        Kelas::create($request->validated());
        return redirect()->route('kelas.index')->with('success', 'Berhasil Menambah Data Kelas');
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
        $kelas = Kelas::findOrFail($id);

        return view('kelas.edit', compact('kelas'));
        return $kelas;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKelasRequest $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->validated());
        return redirect()->route('kelas.index')->with('success', 'Berhasil Mengubah Data Kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // try {
        //     Kelas::findOrFail($id)->delete();
        //     alert()->success('Kelas berhasil dihapus');
        // } catch (\Exception $e) {
        //     alert()->error($e->getMessage());
        // }
        // return redirect()->route('kelas.index');

        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', $kelas->nama_kelas . ' ' . $kelas->kompetensi_keahlian . ' ' . ' Berhasil Di Hapus');
    }
}
