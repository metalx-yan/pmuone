<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BahanBaku;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BahanBaku::all();
        return view('bahanbakus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahanbakus.create');

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
            'name' => 'required',
            'masterbatch' => 'required',
        ]);

        BahanBaku::create($vali);

        return redirect()->route('bahanbaku.index');
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
        $get = BahanBaku::find($id);
        return view('bahanbakus.edit', compact('get'));
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
            'name'              =>  "required",
            'masterbatch'           =>  'required',
        ]);

        $update = BahanBaku::findOrFail($id);
        $update->name = $request->name;
        $update->masterbatch = $request->masterbatch;
        $update->save();

        return redirect()->route('bahanbaku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = BahanBaku::find($id);
        $get->delete();

        return redirect()->back();
    }
}
