@if(session('error'))
<div class="mb-4 px-4 py-2 bg-red-100 border border-red-400 text-black-700 text-center rounded">
    {{ $slot}}
</div>
@endif