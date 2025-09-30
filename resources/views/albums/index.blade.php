<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">All Albums</h3>
                    <div class="grid grid-cols-1 sm:grid-cols2 lg:grid-cols-3 gap-6">
                            @foreach($albums as $album)
                                <a href="{{ route('albums.show', $album) }}">
                                    <x-book-card
                                        :title="$album->title"
                                        :author="$album->artist"
                                        :image="$album->cover_image_url"
                                    />
                                </a>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>