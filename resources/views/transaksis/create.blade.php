@extends('main')
@section('title', 'Buat Transaksi')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Buat Transaksi</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">
        </div>
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-3">
                        <label for="">Kode Supplier</label>
                        <input type="text" name="kode" class="form-control {{ $errors->has('kode') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('kode', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">Supplier</label>
                        <input type="text" name="supplier" class="form-control {{ $errors->has('supplier') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('supplier', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">Tgl Invoice</label>
                        <input type="date" name="tgl_invoice" class="form-control {{ $errors->has('tgl_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('tgl_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">No Invoice</label>
                        <input type="text" name="no_invoice"  class="form-control {{ $errors->has('no_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
<br>
                <div class="row">

                    <div class="col-md-3">
                        <label for="">Tgl Terima Invoice</label>
                        <input type="date" name="tgl_terima_invoce"  class="form-control {{ $errors->has('tgl_terima_invoce') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('tgl_terima_invoce', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">No Faktur Pajak</label>
                        <input type="number" name="pajak" class="form-control {{ $errors->has('pajak') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('pajak', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">DPP</label>
                        <input type="text" name="dpp" class="form-control {{ $errors->has('dpp') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('dpp', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">PPN</label>
                        <input type="text" name="ppn"  class="form-control {{ $errors->has('ppn') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('ppn', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col-md-3">
                        <label for="">Total</label>
                        <input type="text" name="total" class="form-control {{ $errors->has('total') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('total', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : ''}}">
                        {!! $errors->first('keterangan', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
