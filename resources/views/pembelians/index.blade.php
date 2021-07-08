@extends('main')
@section('title', 'Pembelian')
@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Pembelian</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        @php
            $no = 1;
        @endphp
        <div class="card-body">
            <a href="{{ route('pembelian.create') }}" class="btn btn-primary btn-sm">Tambah Pembelian</a>
            <br>
            <br>
            <table class="table border" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Office</th>
                        <th>Tanggal Invoice</th>
                        <th>No Invoice</th>
                        <th>No Faktur</th>
                        <th>Barang</th>
                        <th>PPN</th>
                        <th>PPH 23 (2%)</th>
                        <th>Total</th>
                        <th>No PO</th>
                        <th>Nama Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name_office }}</td>
                            <td>{{ $item->tanggal_invoice }}</td>
                            <td>{{ $item->no_invoice }}</td>
                            <td>{{ $item->no_faktur }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>{{ $item->ppn }}</td>
                            <td>{{ $item->pph }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ $item->no_po }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="{{ route('pembelian.edit', $item->id ) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <form action="{{ route('pembelian.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" >Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection
