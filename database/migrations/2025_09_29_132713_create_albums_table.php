<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* This function creates the albums table on the mysql database. It creates all the columns
    and their types, integer, string etc. It extends the migration class which means it builds
    upon the existing migration class.*/

    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('runtime');
            $table->date('release_date');
            $table->string('album_url');
            $table->string('album_cover');
            $table->string('spotify_link');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
