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
                'runtime' => 62,
                'album_url' => 'https://en.wikipedia.org/wiki/The_Chronic',
                'album_cover' => '1759846005.jpg',
                'spotify_link' => '2V5rhszUpCudPcb01zevOt',
            ],
            [
                'name' => 'Operation Doomsday',
                'release_date' => '1999-10-19',
                'runtime' => 58,
                'album_url' => 'https://en.wikipedia.org/wiki/Operation:_Doomsday',
                'album_cover' => '1760373656.gif',
                'spotify_link' => '5bjUbZPVTEQcb6W3LquX1E',
            ],
            [
                'name' => 'Mm.. Food',
                'release_date' => '2004-11-16',
                'runtime' => 49,
                'album_url' => 'https://en.wikipedia.org/wiki/Mm..Food',
                'album_cover' => '1760374506.jpg',
                'spotify_link' => '1UcS2nqUhxrZjrBZ3tHk2N',
            ],
            [
                'name' => 'The Works',
                'release_date' => '1984-02-20',
                'runtime' => 37,
                'album_url' => 'https://en.wikipedia.org/wiki/The_Works_(Queen_album)',
                'album_cover' => '1760373686.jpg',
                'spotify_link' => '5RS9xkMuDmeVISqGDBmnSa',
            ],
            [
                'name' => 'Currents',
                'release_date' => '2015-07-15',
                'runtime' => 51,
                'album_url' => 'https://en.wikipedia.org/wiki/Currents_(album)',
                'album_cover' => '1759846777.png',
                'spotify_link' => '79dL7FLiJFOO0EoehUHQBv',
            ],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}