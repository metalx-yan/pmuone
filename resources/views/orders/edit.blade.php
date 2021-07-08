@extends('main')
@section('title', 'Edit Order')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Order</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        <div class="card-body">
            <form action="{{ route('order.update', $get->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Material ID</label>
                        <input type="text" name="code" value="{{ $get->code }}" class="form-control {{ $errors->has('code') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('code', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Nama Material</label>
                        <input type="text" name="name" value="{{ $get->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Colour</label>
                        <input type="text" name="colour" value="{{ $get->colour }}" class="form-control {{ $errors->has('colour') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('colour', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Qty</label>
                        <input type="number" min="0" name="qty" value="{{ $get->qty }}" class="form-control {{ $errors->has('qty') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('qty', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Harga (Rp.)</label>
                        <input type="number" min="0" name="harga" value="{{ $get->harga }}" class="form-control {{ $errors->has('harga') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('harga', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Sub Total (Rp.)</label>
                        <input type="number" min="0" name="sub_total" value="{{ $get->sub_total }}" class="form-control {{ $errors->has('sub_total') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('sub_total', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">PPN 10% (Rp.)</label>
                        <input type="number" min="0" name="ppn" value="{{ $get->ppn }}" class="form-control {{ $errors->has('ppn') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('ppn', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Total (Rp.)</label>
                        <input type="number" min="0"  name="total" value="{{ $get->total }}" class="form-control {{ $errors->has('total') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('total', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('order.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
