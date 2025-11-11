<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Artist') }}
        </h2>
    </x-slot>

    <!-- This is the view for editing artists. It retrieves data from the artist
     form blade file which is used for creating and editing artists.  -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Artist</h3>

                    <x-artist-form 
                        :action="route('artists.update', $artist)" 
                        :method="'PUT'"
                        :artist="$artist"
                    />
                </div>
            </div>
        </div>
</x-app-layout>