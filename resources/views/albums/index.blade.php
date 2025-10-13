<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">All Albums</h3>
                    <div class="grid grid-cols-1 sm:grid-cols2 lg:grid-cols-3 gap-6">
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
                            
                                <div class="mt-4 flex space-x-2">
                                    <a href="{{ route('albums.edit', $album) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">Edit</a>

                                    <form action="{{ route('albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this album?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                    </ul>
            </div>
        </div>
    </div>
</x-app-layout>