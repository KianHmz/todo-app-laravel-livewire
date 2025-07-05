<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="themeSwitcher()" :class="{ 'dark': isDark }"
    class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>To Do App</title>

    {{-- @livewireStyles --}}
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        #user-menu-toggle:checked~.user-dropdown {
            display: block;
        }
    </style>
</head>

<body :class="isDark ? 'bg-gray-900 text-gray-300' : 'bg-white text-gray-900'"
    class="h-full flex flex-col transition-colors duration-300">

    <div class="flex flex-1 min-h-0">

        {{ $slot }}

    </div>

    <x-modal id="editTaskModal">
        <form id="editTaskForm">
            <input type="hidden" name="task_id" id="task_id">
            <input type="text" name="title" id="title" class="w-full p-2 border rounded mb-4"
                placeholder="Task title">
            <input type="text" name="status" id="status" class="w-full p-2 border rounded mb-4"
                placeholder="Task status">
            <div class="flex justify-end space-x-2">
                <button type="button" id="cancelEditBtn" class="text-gray-500">Cancel</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </x-modal>

    <x-modal id="editFolderModal">
        <form id="editFolderForm">
            <input type="hidden" name="folder_id" id="folder_id">
            <input type="text" name="title" id="title" class="w-full p-3 border rounded mb-8 text-white"
                placeholder="folder title">
            <input type="text" name="status" id="status" class="w-full p-3 border rounded mb-8 text-white"
                placeholder="folder status">
            <div class="flex justify-end space-x-2">
                <button type="button" id="cancelEditBtn" class="text-gray-500">Cancel</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </x-modal>

    {{-- @livewireScripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

</body>

</html>
