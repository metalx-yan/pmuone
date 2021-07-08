<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksis.create');
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
            'name_office' => 'required',
            'tanggal_invoice' => 'required',
            'no_invoice' => 'required',
            'no_faktur' => 'required',
            'barang' => 'required|integer',
            'ppn' => 'required|integer',
            'total_nilai' => 'required|integer',
            'tanggal_bayar' => 'required',
            'trf' => 'required',
            'pph' => 'required|integer',
            'db_note' => 'required',
            'bank_charge' => 'required',
            'total_actual' => 'required|integer',
            'balance' => 'required|integer',
            'keterangan' => '',
        ]);

        Transaksi::create($vali);

        return redirect()->route('transaksi.index');
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
        $get = Transaksi::find($id);
        return view('transaksis.edit', compact('get'));
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
            'name_office' => 'required',
            'tanggal_invoice' => 'required',
            'no_invoice' => 'required',
            'no_faktur' => 'required',
            'barang' => 'required|integer',
            'ppn' => 'required|integer',
            'total_nilai' => 'required|integer',
            'tanggal_bayar' => 'required',
            'trf' => 'required',
            'pph' => 'required|integer',
            'db_note' => 'required',
            'bank_charge' => 'required',
            'total_actual' => 'required|integer',
            'balance' => 'required|integer',
            'keterangan' => '',
        ]);

        $update = Transaksi::findOrFail($id);
        $update->name_office = $request->name_office;
        $update->tanggal_invoice = $request->tanggal_invoice;
        $update->no_invoice = $request->no_invoice;
        $update->no_faktur = $request->no_faktur;
        $update->barang = $request->barang;
        $update->ppn = $request->ppn;
        $update->total_nilai = $request->total_nilai;
        $update->tanggal_bayar = $request->tanggal_bayar;
        $update->trf = $request->trf;
        $update->pph = $request->pph;
        $update->db_note = $request->db_note;
        $update->bank_charge = $request->bank_charge;
        $update->total_actual = $request->total_actual;
        $update->balance = $request->balance;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Transaksi::find($id);
        $get->delete();

        return redirect()->back();
    }
}
