<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_office');
            $table->date('tanggal_invoice');
            $table->string('no_invoice');
            $table->string('no_faktur');
            $table->integer('barang');
            $table->integer('ppn');
            $table->integer('pph');
            $table->integer('total');
            $table->string('no_po');
            $table->string('nama_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
}
