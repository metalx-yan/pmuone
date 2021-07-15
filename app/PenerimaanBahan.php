<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaanBahan extends Model
{
    protected $fillable = ['nama_barang','kode_barang', 'qty', 'nama_penerima','keterangan'];
}
