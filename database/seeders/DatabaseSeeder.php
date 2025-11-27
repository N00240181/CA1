<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

/* This runs all of the seeders which populates the database. */

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AlbumSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(AdminSeeder::class);
    }
}