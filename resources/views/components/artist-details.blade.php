@props(['name', 'date_of_birth', 'description', 'picture_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1>

    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <img src="{{asset( 'images/artists/' . $picture_url )}}" alt="{{$name}}" class="w-auto mt-4 rounded-lg object-cover overflow-hidden" style="max-height: 500px; max-width: 500px;">
    </div>

    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Description: {{ $description }} mins</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Birthday: {{ $date_of_birth }}</h2>   
</div>
