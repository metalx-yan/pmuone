<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = ['name_office', 'tanggal_invoice', 'no_invoice', 'no_faktur', 'barang', 'ppn', 'pph', 'total', 'no_po', 'nama_barang'];
}
