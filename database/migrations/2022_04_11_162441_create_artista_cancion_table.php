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
        Schema::create('artista_cancion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('cancion_id');
            $table->timestamps();
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->foreign('cancion_id')->references('id')->on('canciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artista_cancion');
    }
};
