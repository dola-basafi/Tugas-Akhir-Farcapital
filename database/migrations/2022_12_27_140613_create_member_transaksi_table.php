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
        Schema::create('member_transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_member');
            $table->bigInteger('id_transaksi');
            $table->foreign('id_member')->references('id')->on('member') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('member_transaksi');
    }
};
