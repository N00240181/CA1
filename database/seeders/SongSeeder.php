<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run()
    {
        $songs = [
            ['track_number' => 1,  'name' => 'The Chronic (Intro)',                         'runtime' => '1:58',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 2,  'name' => 'Fuck Wit Dre Day (And Everybody’s Celebratin’)', 'runtime' => '4:52',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 3,  'name' => 'Let Me Ride',                                   'runtime' => '4:21',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 4,  'name' => 'The Day the Niggaz Took Over',                  'runtime' => '4:33',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 5,  'name' => 'Nuthin’ But a \'G\' Thang',                      'runtime' => '3:58',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 6,  'name' => 'Deeez Nuuuts',                                  'runtime' => '5:06',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 7,  'name' => 'Lil’ Ghetto Boy',                                'runtime' => '5:28',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 8,  'name' => 'A Nigga Witta Gun',                              'runtime' => '3:52',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 9,  'name' => 'Rat‑Tat‑Tat‑Tat',                                'runtime' => '3:48',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 10, 'name' => 'The $20 Sack Pyramid (Skit)',                    'runtime' => '2:53',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 11, 'name' => 'Lyrical Gangbang',                              'runtime' => '4:04',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 12, 'name' => 'High Powered',                                  'runtime' => '2:44',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 13, 'name' => 'The Doctor’s Office (Skit)',                     'runtime' => '1:04',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 14, 'name' => 'Stranded on Death Row',                         'runtime' => '4:47',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 15, 'name' => 'The Roach (The Chronic Outro)',                 'runtime' => '4:36',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
            ['track_number' => 16, 'name' => 'Bitches Ain’t Shit',                              'runtime' => '4:48',  'artist' => 'Dr. Dre', 'release_date' => '1992-12-15', 'album_id' => 1],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
