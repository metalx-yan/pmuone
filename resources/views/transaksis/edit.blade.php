@extends('main')
@section('title', 'Edit Transaksi')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Transaksi</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        <div class="card-body">
            <form action="{{ route('transaksi.update', $get->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nama Office</label>
                        <input type="text" name="name_office" value="{{ $get->name_office }}" class="form-control {{ $errors->has('name_office') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('name_office', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Tanggal Invoice</label>
                        <input type="date" name="tanggal_invoice" value="{{ $get->tanggal_invoice }}" class="form-control {{ $errors->has('tanggal_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('tanggal_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">No Invoice</label>
                        <input type="text" name="no_invoice" value="{{ $get->no_invoice }}" class="form-control {{ $errors->has('no_invoice') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_invoice', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">No Faktur</label>
                        <input type="text" name="no_faktur" value="{{ $get->no_faktur }}" class="form-control {{ $errors->has('no_faktur') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('no_faktur', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Barang</label>
                        <input type="number" name="barang" min="0" value="{{ $get->barang }}" class="form-control {{ $errors->has('barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">PPN</label>
                        <input type="number" name="ppn" min="0" value="{{ $get->ppn }}" class="form-control {{ $errors->has('ppn') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('ppn', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Total</label>
                        <input type="number" name="total_nilai" min="0" value="{{ $get->total_nilai }}" class="form-control {{ $errors->has('total_nilai') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('total_nilai', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Tanggal Bayar</label>
                        <input type="date"  name="tanggal_bayar"  value="{{ $get->tanggal_bayar }}" class="form-control {{ $errors->has('tanggal_bayar') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('tanggal_bayar', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Trf</label>
                        <input type="text" name="trf" value="{{ $get->trf }}" class="form-control {{ $errors->has('trf') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('trf', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">PPH</label>
                        <input type="number" min="0" name="pph" value="{{ $get->pph }}" class="form-control {{ $errors->has('pph') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('pph', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Db Note</label>
                        <input type="text" name="db_note" value="{{ $get->db_note }}" class="form-control {{ $errors->has('db_note') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('db_note', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Bank Charge</label>
                        <input type="text" name="bank_charge" value="{{ $get->bank_charge }}" class="form-control {{ $errors->has('bank_charge') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('bank_charge', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Total</label>
                        <input type="number" min="0" name="total_actual" value="{{ $get->total_actual }}" class="form-control {{ $errors->has('total_actual') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('total_actual', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Balance</label>
                        <input type="number" min="0" name="balance" value="{{ $get->balance }}" class="form-control {{ $errors->has('balance') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('balance', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" value="{{ $get->keterangan }}" class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : ''}}" >
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
