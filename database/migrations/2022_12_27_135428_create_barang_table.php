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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar');
            $table->string('satuan');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_kategori');
            $table->integer('stok');
            $table->foreign('id_supplier')->references('id')->on('supplier') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategori')
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
        Schema::dropIfExists('barang');
    }
};
