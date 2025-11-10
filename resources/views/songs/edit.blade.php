<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Song
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('songs.update', $song) }}" method="POST" class="max-w-md mx-auto">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="track_number" class="block text-gray-700 font-medium mb-2">Track Number:</label>
                            <input type="text" name="track_number" id="track_number" value="{{ $song->track_number }}" class="w-full border border-gray-300 p-2 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Song Name:</label>
                            <input type="text" name="name" id="name" value="{{ $song->name }}" class="w-full border border-gray-300 p-2 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="runtime" class="block text-gray-700 font-medium mb-2">Runtime:</label>
                            <input type="text" name="runtime" id="runtime" value="{{ $song->runtime }}" class="w-full border border-gray-300 p-2 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="artist" class="block text-gray-700 font-medium mb-2">Artist:</label>
                            <input type="text" name="artist" id="artist" value="{{ $song->artist }}" class="w-full border border-gray-300 p-2 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="release_date" class="block text-gray-700 font-medium mb-2">Release Date:</label>
                            <input type="date" name="release_date" id="release_date" value="{{ $song->release_date }}" class="w-full border border-gray-300 p-2 rounded" required>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Song</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
