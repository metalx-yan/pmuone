@extends('main')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit BPB</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        <div class="card-body">
            <form action="{{ route('bpb.update', $get->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Departemen</label>
                        <input type="text" name="departemen" value="{{ $get->departemen }}" class="form-control {{ $errors->has('departemen') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('departemen', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{ $get->nama_barang }}" class="form-control {{ $errors->has('nama_barang') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('nama_barang', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Sisa</label>
                        <input type="text" name="sisa" value="{{ $get->sisa }}" class="form-control {{ $errors->has('sisa') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('sisa', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-4">
                        <label for="">Satuan</label>
                        <input type="text" name="satuan_sisa" value="{{ $get->satuan_sisa }}" class="form-control {{ $errors->has('satuan_sisa') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('satuan_sisa', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Permintaan</label>
                        <input type="text" name="permintaan" value="{{ $get->permintaan }}" class="form-control {{ $errors->has('permintaan') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('permintaan', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Satuan</label>
                        <input type="text" name="satuan_permintaan" value="{{ $get->satuan_permintaan }}" class="form-control {{ $errors->has('satuan_permintaan') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('satuan_permintaan', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" value="{{ $get->keterangan }}" class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('keterangan', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('bpb.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
