@props(['name', 'release_date', 'runtime', 'album_cover'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <h4 class="font-bold text-lg">Runtime: {{ $runtime }} mins</h4>
    <h4 class="font-bold text-lg">{{ $release_date }}</h4>
    <img src="{{asset( 'images/albums/' . $album_cover )}}" alt="{{$name}}" class="w-auto mt-4 rounded-lg object-cover overflow-hidden" style="min-height: 300px; width: 300px;">
</div>