<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['code', 'name', 'colour', 'qty', 'harga', 'sub_total', 'ppn', 'total'];
}
