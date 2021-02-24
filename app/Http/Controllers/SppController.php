<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSppRequest;
use App\Http\Requests\UpdateSppRequest;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spps = Spp::all();

        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spps = Spp::all();

        return view('spp.create', compact('spps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSppRequest $request)
    {
        Spp::create($request->validated());
        return redirect()->route('spp.index')->with('success', 'Berhasil Menambah Data SPP');
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
        $spp = Spp::findOrFail($id);

        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSppRequest $request, $id)
    {
        $spp = Spp::find($id);

        $spp->update($request->validated());
        return redirect()->route('spp.index')->with('success', 'Berhasil Mengubah Data SPP');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = Spp::findOrFail($id);
        $spp->delete();

        return redirect()->route('spp.index')->with('success', 'Data SPP Berhasil Di Hapus');
    }
}
