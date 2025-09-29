<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run()
    {
        $songs = [
            [
                'name' => 'Doomsday',
                'artist' => 'MF DOOM',
                'runtime' => 239, // seconds, e.g. 3:59
                'release_date' => '1999-03-23',
            ],
            [
                'name' => 'Rhymes Like Dimes',
                'artist' => 'MF DOOM',
                'runtime' => 244,
                'release_date' => '1999-03-23',
            ],
            [
                'name' => 'Beef Rapp',
                'artist' => 'MF DOOM',
                'runtime' => 246,
                'release_date' => '1999-03-23',
            ],
            [
                'name' => 'Hoe Cakes',
                'artist' => 'MF DOOM',
                'runtime' => 248,
                'release_date' => '1999-03-23',
            ],
            [
                'name' => 'Accordion',
                'artist' => 'MF DOOM',
                'runtime' => 181,
                'release_date' => '2004-03-23',
            ],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}