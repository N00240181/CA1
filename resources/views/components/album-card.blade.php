@props(['name', 'release_date', 'runtime', 'album_cover'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <h4 class="font-bold text-lg">Runtime: {{ $runtime }} mins</h4>
    <h4 class="font-bold text-lg">{{ $release_date }}</h4>
    <img src="{{asset( 'images/albums/' . $album_cover . '.gif')}}" alt="{{$name}}" class="w-full h-auto mt-4 rounded-lg object-cover">
</div>