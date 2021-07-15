<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenerimaanBahan;

class PenerimaanBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PenerimaanBahan::all();
        return view('penerimaanbarangs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerimaanbarangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali = $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'qty' => 'required|integer',
            'nama_penerima' => 'required',
            'keterangan' => 'required',
        ]);

        PenerimaanBahan::create($vali);

        return redirect()->route('penerimaanbarang.index');
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
        $get = PenerimaanBahan::find($id);
        return view('penerimaanbarangs.edit', compact('get'));
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
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'qty' => 'required|integer',
            'nama_penerima' => 'required',
            'keterangan' => 'required',
        ]);

        $update = PenerimaanBahan::findOrFail($id);
        $update->nama_barang = $request->nama_barang;
        $update->kode_barang = $request->kode_barang;
        $update->qty = $request->qty;
        $update->nama_penerima = $request->nama_penerima;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect()->route('penerimaanbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = PenerimaanBahan::find($id);
        $get->delete();

        return redirect()->back();
    }
}
