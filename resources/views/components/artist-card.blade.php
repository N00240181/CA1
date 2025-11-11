@props(['name', 'date_of_birth', 'description', 'picture_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <img src="{{asset( 'images/artists/' . $picture_url )}}" alt="{{$name}}" class="w-auto mt-4 rounded-lg object-cover overflow-hidden" style="height: 300px; width: 400px;">
</div>