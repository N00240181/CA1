<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        $albums = [
            [
                'name' => 'The Chronic',
                'release_date' => '1992-12-15',
                'runtime' => 62, // in minutes
                'album_url' => 'https://en.wikipedia.org/wiki/The_Chronic',
                'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/8/84/TheChronicDrDre.jpg',
            ],
            [
                'name' => 'Illmatic',
                'release_date' => '1994-04-19',
                'runtime' => 39,
                'album_url' => 'https://en.wikipedia.org/wiki/Illmatic',
                'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/2/27/NasIllmatic.jpg',
            ],
            [
                'name' => 'To Pimp a Butterfly',
                'release_date' => '2015-03-15',
                'runtime' => 79,
                'album_url' => 'https://en.wikipedia.org/wiki/To_Pimp_a_Butterfly',
                'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/9/9e/To_Pimp_a_Butterfly_cover_art.jpeg',
            ],
            [
                'name' => 'My Beautiful Dark Twisted Fantasy',
                'release_date' => '2010-11-22',
                'runtime' => 68,
                'album_url' => 'https://en.wikipedia.org/wiki/My_Beautiful_Dark_Twisted_Fantasy',
                'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/f/f2/My_Beautiful_Dark_Twisted_Fantasy.jpg',
            ],
            [
                'name' => 'Get Rich or Die Tryin\'',
                'release_date' => '2003-02-06',
                'runtime' => 69,
                'album_url' => 'https://en.wikipedia.org/wiki/Get_Rich_or_Die_Tryin%27',
                'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/9/94/Get_Rich_Or_Die_Tryin%27.JPG',
            ],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}