@props(['name', 'release_date', 'runtime', 'album_url', 'album_cover'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <h4 class="font-bold text-lg">Runtime: {{ $runtime }}</h4>
    <h4 class="font-bold text-lg">{{ $release_date }}</h4>
    <h5 class="font-bold text-lg">{{ $album_url }}</h5>
    <img src="{{asset( 'images/albums/' . $album_cover . '.jpg')}}" alt="{{$name}}">
</div>