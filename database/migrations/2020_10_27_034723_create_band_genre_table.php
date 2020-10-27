<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_genre', function (Blueprint $table) {
            $table->primary(['band_id', 'genre_id']);
            $table->foreignId('band_id')->constrained('bands')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('genre_id')->constrained('genres')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('band_genre');
    }
}
