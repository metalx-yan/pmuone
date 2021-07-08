@extends('main')
@section('title', 'Buat Pembelian')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Buat Pembelian</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">
        </div>
        <div class="card-body">
            <form action="{{ route('pembelian.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-3">
                        <label for="">Nama Office</label>
                        <input type="text" name="name_office" class="form-control {{ $errors->has('name_office') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('name_office', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">Tanggal Invoice</label>
                        <input type="date" name="tanggal_invoice" class="form-control {{ $errors->has('tanggal_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('tanggal_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">No Invoice</label>
                        <input type="text" name="no_invoice" class="form-control {{ $errors->has('no_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">No Faktur</label>
                        <input type="text" name="no_faktur" min="0" class="form-control {{ $errors->has('no_faktur') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_faktur', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
<br>
                <div class="row">

                    <div class="col-md-3">
                        <label for="">Barang</label>
                        <input type="number" min="0" name="barang" min="0" class="form-control {{ $errors->has('barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">PPN</label>
                        <input type="number" min="0" name="ppn" min="0" class="form-control {{ $errors->has('ppn') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('ppn', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">PPH 23 (2%)</label>
                        <input type="number" min="0" name="pph" min="0" class="form-control {{ $errors->has('pph') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('pph', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">Total</label>
                        <input type="number" min="0" name="total" min="0" class="form-control {{ $errors->has('total') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('total', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col-md-3">
                        <label for="">No PO</label>
                        <input type="text" name="no_po" class="form-control {{ $errors->has('no_po') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_po', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="col-md-3">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control {{ $errors->has('nama_barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('nama_barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('pembelian.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
