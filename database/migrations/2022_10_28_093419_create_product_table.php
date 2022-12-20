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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('judul');
            $table->string('nik');
            $table->string('jenis');
            $table->string('kph');
            $table->string('harga')->nullable();
            $table->string('harga_diskon')->nullable();
            $table->string('kategori');
            $table->string('kategori_warna');
            $table->string('label_baru')->nullable();
            $table->string('label_hot')->nullable();
            $table->text('content');
            $table->text('slug');
            $table->text('view');
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
        Schema::dropIfExists('product');
    }
};
