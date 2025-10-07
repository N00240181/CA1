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
                'album_cover' => 'thechronic',
                'spotify_link' => '2V5rhszUpCudPcb01zevOt',
            ],
            [
                'name' => 'Illmatic',
                'release_date' => '1994-04-19',
                'runtime' => 39,
                'album_url' => 'https://en.wikipedia.org/wiki/Illmatic',
                'album_cover' => 'illmatic',
                'spotify_link' => '3kEtdS2pH6hKcMU9Wioob1',
            ],
            [
                'name' => 'To Pimp a Butterfly',
                'release_date' => '2015-03-15',
                'runtime' => 79,
                'album_url' => 'https://en.wikipedia.org/wiki/To_Pimp_a_Butterfly',
                'album_cover' => 'topimpabutterfly',
                'spotify_link' => '7ycBtnsMtyVbbwTfJwRjSP',
            ],
            [
                'name' => 'My Beautiful Dark Twisted Fantasy',
                'release_date' => '2010-11-22',
                'runtime' => 68,
                'album_url' => 'https://en.wikipedia.org/wiki/My_Beautiful_Dark_Twisted_Fantasy',
                'album_cover' => 'mybeautifuldarktwistedfantasy',
                'spotify_link' => '20r762YmB5HeofjMCiPMLv',
            ],
            [
                'name' => 'Get Rich or Die Tryin',
                'release_date' => '2003-02-06',
                'runtime' => 69,
                'album_url' => 'https://en.wikipedia.org/wiki/Get_Rich_or_Die_Tryin%27',
                'album_cover' => 'getrichordietryin',
                'spotify_link' => '5G5rgQHzdQnw32SI0WjIo5',
            ],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}