<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Album Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-album-details
                        :name="$album->name"
                        :runtime="$album->runtime"
                        :release_date="$album->release_date"
                        :album_url="$album->album_url"
                        :album_cover="$album->album_cover"
                        :spotify_link="$album->spotify_link"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>