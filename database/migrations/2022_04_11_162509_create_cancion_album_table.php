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
        Schema::create('cancion_album', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cancion_id');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();
            $table->foreign('cancion_id')->references('id')->on('canciones');
            $table->foreign('album_id')->references('id')->on('albumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion_album');
    }
};
