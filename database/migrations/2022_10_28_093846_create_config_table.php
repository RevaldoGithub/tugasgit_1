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
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('favicon');
            $table->string('logo_footer');
            $table->string('title');
            $table->text('metadata');
            $table->string('email');
            $table->string('alamat');
            $table->string('no_telp');
            $table->text('fb');
            $table->text('twiter');
            $table->text('youtube');
            $table->text('tiktok');
            $table->text('ig');
            $table->text('wa');
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
        Schema::dropIfExists('config');
    }
};
