<p class="mb-2">Foto Odometer</p>
<div class="flex flex-col items-center gap-2">
    <img src="{{ asset('storage/' . $getState()) }}" class="object-cover rounded shadow" alt="Foto Odometer">
    <a href="{{ asset('storage/' . $getState()) }}" download class="px-3 py-1 bg-blue-600 text-gray-800 dark:text-white text-sm rounded hover:bg-blue-700 transition">
        Download
    </a>
</div>
