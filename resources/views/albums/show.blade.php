<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Album Details') }}
        </h2>
    </x-slot>

    <!-- This is the view for the album-details file. It shows
     more information about the album. -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-album-details
                        :album="$album"
                        :name="$album->name"
                        :runtime="$album->runtime"
                        :release_date="$album->release_date"
                        :album_url="$album->album_url"
                        :album_cover="$album->album_cover"
                        :spotify_link="$album->spotify_link"
                    />

                    @foreach ($album->songs as $song)
    <x-song-details
        :track_number="$song->track_number"
        :name="$song->name"
        :runtime="$song->runtime"
        :artist="$song->artist"
        :release_date="$song->release_date"
    />
    <div class="grid grid-cols-1">
    <div class="flex justify-center mb-4">
        <a href="{{ route('songs.edit', $song) }}" 
           class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">
           Edit Song
        </a>
    </div>
    <div class="flex justify-center mb-4">
        <form action="{{ route('songs.destroy', $song) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Delete</button>
</div>
</form>
    </div>
@endforeach
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-gray-300 py-5">
                    <h4 class="font-semibold text-xl text-gray-800 leading-tight px-12 mt-8">Add a New Song:</h4>
    <form action="{{ route('albums.songs.store', $album) }}" method="POST" class="max-w-md mx-auto mt-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Track Number:</label>
            <input type="text" name="track_number" id="track_number" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Song Name:</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="runtime" class="block text-gray-700 font-medium mb-2">Runtime:</label>
            <input type="text" name="runtime" id="runtime" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="artist" class="block text-gray-700 font-medium mb-2">Artist:</label>
            <input type="text" name="artist" id="artist" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="release_date" class="block text-gray-700 font-medium mb-2">Release Date:</label>
            <input type="date" name="release_date" id="release_date" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        
        <input type="hidden" name="album_id" value="{{ $album->id }}">

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Song</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>