@props(['track_number', 'name', 'runtime', 'artist', 'release_date', 'id'])

<div class="my-5 border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $track_number }}</h1>
    <div>
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 1rem;">{{ $name }}</h1>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Artist: {{ $artist }}</h2>
    </div>
    <div>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Runtime: {{ $runtime }} mins</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2>
    </div>
    <div class="grid grid-cols-1">
    <div class="flex mb-4">
        <a href="{{ route('songs.edit', $id) }}" 
           class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">
           Edit Song
        </a>
    </div>
    <div class="flex mb-4">
        <form action="{{ route('songs.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Delete</button>
</div>
</form>
    </div>
</div>

