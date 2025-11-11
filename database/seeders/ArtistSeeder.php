<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::insert([
    [
        'name' => 'MF DOOM',
        'date_of_birth' => '1971-07-13',
        'description' => 'MF DOOM also known as Daniel Dumile was a British American rapper and producer known for his complex lyrics masked persona and influence on underground hip hop His albums like Madvillainy and Mm Food are considered classics',
        'picture_url' => 'mfdoom.jpg'
    ],
    [
        'name' => 'Dr. Dre',
        'date_of_birth' => '1965-02-18',
        'description' => 'Dr Dre also known as Andre Young is an American rapper producer and entrepreneur A founding member of NWA and creator of Aftermath Entertainment Dre shaped the sound of West Coast hip hop and launched artists like Eminem Snoop Dogg and Kendrick Lamar',
        'picture_url' => 'drdre.jpg'
    ],
    [
        'name' => 'Queen',
        'date_of_birth' => '1970-01-01',
        'description' => 'Queen is a British rock band formed in London in 1970 Known for powerful vocals complex compositions and theatrical performances they created legendary songs such as Bohemian Rhapsody We Will Rock You and Dont Stop Me Now',
        'picture_url' => 'queen.jpg'
    ],
    [
        'name' => 'Tame Impala',
        'date_of_birth' => '2007-01-01',
        'description' => 'Tame Impala is the psychedelic music project of Australian musician Kevin Parker Blending dreamy synths rock and electronic influences he is known for albums such as Currents and The Slow Rush',
        'picture_url' => 'tameimpala.jpg'
    ]
]);

    }
}
