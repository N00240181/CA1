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
            ['track_number' => 1, 'name' => 'The Time We Faced Doom (Skit)', 'runtime' => '2:04', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 2, 'name' => 'Doomsday', 'runtime' => '3:05', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 3, 'name' => 'Tick, Tick...', 'runtime' => '3:03', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 4, 'name' => 'Hey!', 'runtime' => '3:12', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 5, 'name' => 'Next Levels', 'runtime' => '3:06', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 6, 'name' => 'Red & Gold', 'runtime' => '2:30', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 7, 'name' => 'The Mic', 'runtime' => '2:35', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 8, 'name' => 'Go with the Flow', 'runtime' => '2:50', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 9, 'name' => 'Benos', 'runtime' => '2:14', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 10, 'name' => 'Rhymes Like Dimes', 'runtime' => '3:22', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 11, 'name' => 'Kon Karne', 'runtime' => '2:42', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 12, 'name' => 'Hey!', 'runtime' => '1:58', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 13, 'name' => 'Gas Drawls', 'runtime' => '2:50', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 14, 'name' => 'America\'s Most Blunted', 'runtime' => '3:36', 'artist' => 'MF DOOM', 'release_date' => '1999-10-19'],
            ['track_number' => 1, 'name' => 'Beef Rapp', 'runtime' => '2:44', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 2, 'name' => 'Hoe Cakes', 'runtime' => '2:23', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 3, 'name' => 'Potholderz', 'runtime' => '3:36', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 4, 'name' => 'One Beer', 'runtime' => '3:05', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 5, 'name' => 'Deep Fried Frenz', 'runtime' => '3:25', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 6, 'name' => 'Poo-Putt Platter', 'runtime' => '2:26', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 7, 'name' => 'Fillet-O-Rapper', 'runtime' => '3:33', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 8, 'name' => 'Gumbo', 'runtime' => '2:16', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 9, 'name' => 'Fig Leaf Bi-Carbonate', 'runtime' => '2:49', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 10, 'name' => 'Kon Queso', 'runtime' => '3:06', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 11, 'name' => 'Vomitspit', 'runtime' => '2:48', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 12, 'name' => 'Kookies', 'runtime' => '3:27', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 13, 'name' => 'Guinnesses', 'runtime' => '2:26', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 14, 'name' => 'Rapp Snitch Knishes', 'runtime' => '4:29', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 15, 'name' => 'Rhymes Like Dimes (MM..FOOD Version)', 'runtime' => '3:22', 'artist' => 'MF DOOM', 'release_date' => '2004-11-23'],
            ['track_number' => 1, 'name' => 'Radio Ga Ga',                       'runtime' => '5:50', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 2, 'name' => 'Tear It Up',                        'runtime' => '3:25', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 3, 'name' => 'It’s a Hard Life',                 'runtime' => '4:05', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 4, 'name' => 'Man On The Prowl',                 'runtime' => '3:25', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 5, 'name' => 'Machines (or “Back to Humans”)',    'runtime' => '5:08', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 6, 'name' => 'I Want to Break Free',            'runtime' => '3:19', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 7, 'name' => 'Keep Passing the Open Windows',   'runtime' => '5:21', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 8, 'name' => 'Hammer to Fall',                   'runtime' => '4:25', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 9, 'name' => 'Is This the World We Created…?',   'runtime' => '2:13', 'artist' => 'Queen', 'release_date' => '1984‑02‑27'],
            ['track_number' => 1,  'name' => 'Let It Happen',        'runtime' => '7:47', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 2,  'name' => 'Nangs',                'runtime' => '1:43', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 3,  'name' => 'The Moment',           'runtime' => '4:59', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 4,  'name' => 'Yes I’m Changing',     'runtime' => '4:33', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 5,  'name' => 'Eventually',           'runtime' => '5:37', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 6,  'name' => 'Gossip',               'runtime' => '3:14', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 7,  'name' => 'The Less I Know the Better', 'runtime' => '3:36', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 8,  'name' => 'Past Life',            'runtime' => '4:16', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 9,  'name' => 'Disciples',            'runtime' => '3:52', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 10, 'name' => 'Borderline',           'runtime' => '4:33', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 11, 'name' => 'Cause I’m A Man',      'runtime' => '4:06', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 12, 'name' => 'Reality in Motion',    'runtime' => '5:04', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 13, 'name' => 'Love/Paranoia',        'runtime' => '3:27', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
            ['track_number' => 14, 'name' => 'New Person, Same Old Mistakes', 'runtime' => '6:03', 'artist' => 'Tame Impala', 'release_date' => '2015-07-17'],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
