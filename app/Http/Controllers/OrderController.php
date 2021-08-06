<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $data = Order::all();

        return view('orders.pimpinanlaporan',compact('data'));
    }
    public function index()
    {
        $data = Order::all();
        return view('orders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
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
            'code' => 'required|unique:orders',
            'name' => 'required',
            'colour' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|integer',
            'sub_total' => 'required|integer',
            'ppn' => 'required|integer',
            'total' => 'required|integer',
        ]);

        Order::create($vali);

        return redirect()->route('order.index');
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
        $get = Order::find($id);
        return view('orders.edit', compact('get'));
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
            'code'              =>  "required|unique:orders,code,$id|string",
            'name'              =>  'required',
            'colour'            =>  'required',
            'qty'               =>  'required',
            'harga'             =>  'required',
            'sub_total'         =>  'required',
            'ppn'               =>  'required',
            'total'             =>  'required'
        ]);

        $update = Order::findOrFail($id);
        $update->code = $request->code;
        $update->name = $request->name;
        $update->colour = $request->colour;
        $update->qty = $request->qty;
        $update->harga = $request->harga;
        $update->sub_total = $request->sub_total;
        $update->ppn = $request->ppn;
        $update->total = $request->total;
        $update->save();

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Order::find($id);
        $get->delete();

        return redirect()->back();
    }
}
