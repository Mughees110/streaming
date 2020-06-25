<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('cover')->nullable();
            $table->string('year')->nullable();
            $table->string('genre')->nullable();
            $table->string('filePath')->nullable();
            $table->string('fileName')->nullable();
            $table->string('fileDuration')->nullable();
            $table->string('fileQuality')->nullable();
            $table->string('fileSize')->nullable();
            $table->string('fileType')->nullable();
            $table->string('isSeason')->nullable();
            $table->string('seasonId')->nullable();
            $table->string('episodeNumber')->nullable();
            $table->string('type')->nullable();
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
