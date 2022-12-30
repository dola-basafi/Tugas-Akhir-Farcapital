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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('telp')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('id_role')->default('4');
            $table->unsignedTinyInteger('status')->default(0);
            $table->foreign('id_role')->references('id')->on('role') ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
