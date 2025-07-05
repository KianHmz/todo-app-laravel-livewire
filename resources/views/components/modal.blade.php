@props(['id'])

<div id="{{ $id }}" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg w-1/3 relative">
        <button class="absolute top-2 right-2 text-gray-400 closeModalBtn">&times;</button>
        {{ $slot }}
    </div>
</div>
