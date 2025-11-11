<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Seeder;

/* This is the seeder which populates the albums table with data. */

class AlbumSeeder extends Seeder
{
    public function run()
    {
        $currentTimestamp = Carbon::now();

        $albums = [
            [
                'name' => 'The Chronic',
                'release_date' => '1992-12-15',
                'runtime' => 62,
                'album_url' => 'https://en.wikipedia.org/wiki/The_Chronic',
                'album_cover' => '1759846005.jpg',
                'spotify_link' => '2V5rhszUpCudPcb01zevOt',
                'artist_ids' => [1],
            ],
            [
                'name' => 'Operation Doomsday',
                'release_date' => '1999-10-19',
                'runtime' => 58,
                'album_url' => 'https://en.wikipedia.org/wiki/Operation:_Doomsday',
                'album_cover' => '1760373656.gif',
                'spotify_link' => '5bjUbZPVTEQcb6W3LquX1E',
                'artist_ids' => [2],
            ],
            [
                'name' => 'Mm.. Food',
                'release_date' => '2004-11-16',
                'runtime' => 49,
                'album_url' => 'https://en.wikipedia.org/wiki/Mm..Food',
                'album_cover' => '1760374506.jpg',
                'spotify_link' => '1UcS2nqUhxrZjrBZ3tHk2N',
                'artist_ids' => [2],
            ],
            [
                'name' => 'The Works',
                'release_date' => '1984-02-20',
                'runtime' => 37,
                'album_url' => 'https://en.wikipedia.org/wiki/The_Works_(Queen_album)',
                'album_cover' => '1760373686.jpg',
                'spotify_link' => '5RS9xkMuDmeVISqGDBmnSa',
                'artist_ids' => [3],
            ],
            [
                'name' => 'Currents',
                'release_date' => '2015-07-15',
                'runtime' => 51,
                'album_url' => 'https://en.wikipedia.org/wiki/Currents_(album)',
                'album_cover' => '1759846777.png',
                'spotify_link' => '79dL7FLiJFOO0EoehUHQBv',
                'artist_ids' => [4],
            ],
        ];

        /* foreach ($albums as $albumData) {
            $album = Album::create(array_merge($albumData));

            $artists = Artist::inRandomOrder()->take(2)->pluck('id');
            $album->artists()->attach($artists);
        } I don't want it to be random */

        foreach ($albums as $albumData) {
            $artistIds = $albumData['artist_ids'];
            unset($albumData['artist_ids']); /* Creates a temporary artist_ids column to assign the artists to the right albums */

            $album = Album::create($albumData);
            $album->artists()->attach($artistIds);
        }
    }
}