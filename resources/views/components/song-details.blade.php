@props(['track_number', 'name', 'runtime', 'artist', 'release_date', 'song'])

<div class="my-5 border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $track_number }}</h1>
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 1rem;">{{ $name }}</h1>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Artist: {{ $artist }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Runtime: {{ $runtime }} mins</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2>
</div>