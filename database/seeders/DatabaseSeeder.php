<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

/* This runs the AlbumSeeder which populates the database. */

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AlbumSeeder::class);
    }
}