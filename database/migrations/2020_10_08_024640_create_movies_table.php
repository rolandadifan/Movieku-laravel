<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('poster')->nullable();
            $table->string('pemeran')->nullable();
            $table->string('negara')->nullable();
            $table->string('sutradara')->nullable();
            $table->string('imdb')->nullable();
            $table->longText('url')->nullable();
            $table->string('kualitas')->nullable();
            $table->string('rilis')->nullable();
            $table->string('durasi')->nullable();
            $table->longtext('sinopsis')->nullable();

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
        Schema::dropIfExists('movies');
    }
}
