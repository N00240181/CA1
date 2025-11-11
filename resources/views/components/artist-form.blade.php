@props(['action', 'method', 'artist'])

<!-- This is the view used for creating and editing artists. -->

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Artist Name:</label>
        <input 
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $artist->name ?? '') }}"
        placeholder="Enter name of the artist"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="date_of_birth" class="block text-gray-700 font-bold mb-2">Date Of Birth:</label>
        <input 
        type="text"
        name="date_of_birth"
        id="date_of_birth"
        value="{{ old('date_of_birth', $artist->date_of_birth ?? '') }}"
        placeholder="Enter the date of birth of the artist"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('date_of_birth')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
        <input 
        type="date"
        name="description"
        id="description"
        value="{{ old('description', $artist->description ?? '') }}"
        placeholder="Enter the release date of the artist"
        required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
    @error('description')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

<div class="mb-4">
    <label for="picture_url" class="block text-sm font-medium text-gray-700">Picture:</label>
    <input 
        type="file"
        name="picture_url"
        id="picture_url"
        {{ isset($artist) ? '' : 'required' }}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
    @error('picture_url')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

    @isset($artist->picture_url)
        <div class="mb-4">
            <img src="{{ asset($artist->picture_url) }}" alt="{{ $artist->name }}" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($artist) ? 'Update Artist' : 'Create Artist' }}
        </x-primary-button>
    </div>
</form>