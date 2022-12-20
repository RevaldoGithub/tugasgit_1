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
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('harga_bulan');
            $table->string('fasilitas_1')->nullable();
            $table->string('fasilitas_2')->nullable();
            $table->string('fasilitas_3')->nullable();
            $table->string('fasilitas_4')->nullable();
            $table->string('fasilitas_5')->nullable();
            $table->string('fasilitas_6')->nullable();
            $table->string('fasilitas_7')->nullable();
            $table->string('fasilitas_8')->nullable();
            $table->string('fasilitas_9')->nullable();
            $table->string('fasilitas_10')->nullable();
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
        Schema::dropIfExists('price');
    }
};
