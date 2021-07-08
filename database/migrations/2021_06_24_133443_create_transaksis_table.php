<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_office');
            $table->date('tanggal_invoice');
            $table->string('no_invoice');
            $table->string('no_faktur');
            $table->integer('barang');
            $table->integer('ppn');
            $table->integer('total_nilai');
            $table->date('tanggal_bayar');
            $table->string('trf');
            $table->integer('pph');
            $table->string('db_note');
            $table->string('bank_charge');
            $table->integer('total_actual');
            $table->integer('balance');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
}
