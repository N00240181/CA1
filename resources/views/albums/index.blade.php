<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <x-alert-error>
        {{ session('error') }}
    </x-alert-error>
    <!-- <div class="flex items-center max-w-md mx-auto p-3">
        <form action="{{ route('albums.index') }}" method="GET" class="flex w-full">
        <input type="text" name="search" id="search" placeholder="Search...">
        <button type="submit" class="ms-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Search</button>
        </form>
    </div> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">All Albums</h3>
                      <form action="{{ route('albums.index') }}" method="GET" class="flex w-full py-5">
                        <input type="text" name="search" id="search" placeholder="Search...">
                        <button type="submit" class="ms-2 px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-700">Search</button>
                      </form>
                    <div class="grid grid-cols-1 sm:grid-cols2 lg:grid-cols-3 gap-6">
                            <!-- This for each goes through all the albums and displays
                             them as cards. -->
                            @foreach($albums as $album)
                                <div class="border p-4 rounded-lg shadow-md">
                                <a href="{{ route('albums.show', $album) }}">
                                    <x-album-card
                                        :name="$album->name"
                                        :runtime="$album->runtime"
                                        :release_date="$album->release_date"
                                        :album_url="$album->album_url"
                                        :album_cover="$album->album_cover"
                                        :spotify_link="$album->spotify_link"
                                        />
                                </a>

                                <!-- This div contains the routes to the edit and
                                 delete functions to update and destroy albums. @csrf
                                 is used for security to prevent cross site tracking. -->
                                 @if(auth()->user()->role === 'admin')
                                <div class="mt-4 flex space-x-2">
                                    <a href="{{ route('albums.edit', $album) }}" class="text-gray-600 bg-green-300 hover:bg-green-700 font-bold py-2 px-4 rounded">Edit</a>

                                    <form action="{{ route('albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this album?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>