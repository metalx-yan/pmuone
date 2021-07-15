<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departemen');
            $table->string('nama_barang');
            $table->string('sisa');
            $table->string('satuan_sisa');
            $table->string('permintaan');
            $table->string('satuan_permintaan');
            $table->string('keterangan');
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
        Schema::dropIfExists('bpbs');
    }
}
