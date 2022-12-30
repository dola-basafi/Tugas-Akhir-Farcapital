<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_barang');
            $table->bigInteger('id_transaksi');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('harga_total');
            $table->foreign('id_barang')->references('id')->on('barang') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('detail_transaksi');
    }
};
