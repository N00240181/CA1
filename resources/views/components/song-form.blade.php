@props(['action', 'method', 'song'])

<!-- This is the view used for creating and editing songs. -->

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="track_number" class="block text-gray-700 font-bold mb-2">Track number:</label>
        <input 
        type="text"
        name="track_number"
        id="track_number"
        value="{{ old('track_number', $song->track_number ?? '') }}"
        placeholder="Enter track number"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('track_number')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
        <input 
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $album->name ?? '') }}"
        placeholder="Enter the name of the song"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="artist" class="block text-gray-700 font-bold mb-2">Artist:</label>
        <input 
        type="date"
        name="artist"
        id="artist"
        value="{{ old('artist', $album->artist ?? '') }}"
        placeholder="Enter the song's artist"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('artist')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="release_date" class="block text-gray-700 font-bold mb-2">Release Date:</label>
        <input 
        type="text"
        name="release_date"
        id="release_date"
        value="{{ old('release_date', $album->release_date ?? '') }}"
        placeholder="Enter the release date"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('release_date')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="runtime" class="block text-gray-700 font-bold mb-2">Runtime:</label>
        <input 
        type="text"
        name="runtime"
        id="runtime"
        value="{{ old('runtime', $album->runtime ?? '') }}"
        placeholder="Enter the runtime of the song"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('runtime')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

    <div>
        <x-primary-button>
            {{ isset($song) ? 'Update Song' : 'Create Song' }}
        </x-primary-button>
    </div>
</form>