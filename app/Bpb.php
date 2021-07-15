<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bpb extends Model
{
    protected $fillable = ['departemen', 'nama_barang', 'sisa', 'satuan_sisa', 'permintaan', 'satuan_permintaan', 'keterangan'];
}
