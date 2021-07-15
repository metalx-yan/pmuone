@extends('main')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Penerimaan Bahan</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        <div class="card-body">
            <form action="{{ route('penerimaanbahan.update', $get->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{ $get->nama_barang }}" class="form-control {{ $errors->has('nama_barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('nama_barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Kode Barang</label>
                        <input type="text" name="kode_barang" value="{{ $get->kode_barang }}" class="form-control {{ $errors->has('kode_barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('kode_barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Qty (KG)</label>
                        <input type="number" name="qty" value="{{ $get->qty }}" class="form-control {{ $errors->has('qty') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('qty', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Nama Penerima</label>
                        <input type="text" name="nama_penerima" value="{{ $get->nama_penerima }}" class="form-control {{ $errors->has('nama_penerima') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('nama_penerima', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Keterangan OK/TDK</label>
                        <input type="text" name="keterangan" value="{{ $get->keterangan }}" class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('keterangan', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('penerimaanbahan.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
