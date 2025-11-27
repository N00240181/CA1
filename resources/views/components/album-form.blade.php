@props(['action', 'method', 'album'])

<!-- This php is used to link the albums with the artist form, so you can select
 what artists the album is part of. -->
<?php

use App\Models\Artist;
$artists = Artist::orderBy('name')->get();
?>

<!-- This is the view used for creating and editing albums. -->

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- I made my own Laravel CRUD on the first week following 
    this video https://www.youtube.com/watch?v=cDEVWbz2PpQ&pp=ygUMbGFyYXZlbCBjcnVk 
    and I remember @csrf is used for security 
    and it prevents other sites from accessing valuable cookies. -->
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Album Name:</label>
        <input 
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $album->name ?? '') }}"
        placeholder="Enter name of the album"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="runtime" class="block text-gray-700 font-bold mb-2">Runtime:</label>
        <input 
        type="text"
        name="runtime"
        id="runtime"
        value="{{ old('runtime', $album->runtime ?? '') }}"
        placeholder="Enter the runtime of the album"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('runtime')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="release_date" class="block text-gray-700 font-bold mb-2">Release Date:</label>
        <input 
        type="date"
        name="release_date"
        id="release_date"
        value="{{ old('release_date', $album->release_date ?? '') }}"
        placeholder="Enter the release date of the album"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('release_date')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="album_url" class="block text-gray-700 font-bold mb-2">Album URL (Wikipedia):</label>
        <input 
        type="text"
        name="album_url"
        id="album_url"
        value="{{ old('album_url', $album->album_url ?? '') }}"
        placeholder="Enter the url of the album"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('album_url')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="spotify_link" class="block text-gray-700 font-bold mb-2">Spotify Link:</label>
        <input 
        type="text"
        name="spotify_link"
        id="spotify_link"
        value="{{ old('spotify_link', $album->spotify_link ?? '') }}"
        placeholder="Enter the url of the album"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
        />

    @error('spotify_link')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="album_cover" class="block text-sm font-medium text-gray-700">Album Cover:</label>
    <input 
        type="file"
        name="album_cover"
        id="album_cover"
        {{ isset($album) ? '' : 'required' }}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
    @error('album_cover')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

<!-- This is used to create check boxes the admin can click on to define which artists are part of the album -->
<div class="mb-4">
    <label for="album_artist" class="block text-sm font-medium text-gray-700">Artists:</label>
    <div class="mt-1 block w-full border-black-100 rounded-md shadow-sm">
        @foreach($artists as $artist)
        <label>
            <input 
                type="checkbox" 
                name="artists[]" 
                value="{{ $artist->id }}"
                class="mx-3 rounded-lg"
                {{ isset($album) && $album->artists->contains($artist->id) ? 'checked' : '' }}
                >
        {{ $artist->name }}
</label>
        @endforeach
    </div>
</div>
    </div>
        
    @error('picture_url')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

    <div>
        <x-primary-button>
            {{ isset($album) ? 'Update Album' : 'Create Album' }}
        </x-primary-button>
    </div>
</form>