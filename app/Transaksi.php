<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['name_office', 'tanggal_invoice', 'no_invoice', 'no_faktur', 'barang', 'ppn', 'total_nilai', 'tanggal_bayar', 'trf', 'pph', 'db_note', 'bank_charge','total_actual','balance','keterangan'];
}
