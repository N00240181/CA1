@props(['name', 'release_date', 'runtime', 'album_url', 'album_cover', 'spotify_link', 'album'])

<?php

use App\Models\Artist;
$artists = Artist::orderBy('name')->get();

?>

<!-- This file is used for displaying more details about the album. It
 contains an embed link I got from spotify which allows the user
 to play through the album. It imports attributes from the albums table. -->

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1>

    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <img src="{{ asset('images/albums/' . $album_cover ) }}" alt="{{ $name }}" class="class="w-full h-auto mt-4 rounded-lg object-cover"">
    </div>
    
    <h4 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Link: <a href="{{ $album_url }}">{{ $album_url }}</a></h4>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Runtime: {{ $runtime }} mins</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2>
    <h2 for="album_artist" class="block text-sm font-medium text-gray-700 italic bold mb-4" style="font-size: 1.5rem;">Artists:</h2>
    <div class="mt-1 block w-full border-black-100 rounded-md shadow-sm">
        @foreach($album->artists as $artist)
    <ul><div class="py-8 rounded-lg" ><a href="{{ route('artists.show', $artist) }}" class="text-gray-500 text-sm underline italic mb-4" style="font-size: 1rem;">{{ $artist->name }}</a></div></ul>
        @endforeach
    </div>
    <?php if (connection_status() == 0) { ?>
    <iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/{{$spotify_link}}?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy""></iframe>
    <?php } ?>
</div>
