<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="themeSwitcher()" :class="{ 'dark': isDark }"
    class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>To Do App</title>

    @livewireStyles
    @vite('resources/css/app.css')
    <style>
        #user-menu-toggle:checked~.user-dropdown {
            display: block;
        }
    </style>
</head>

<body :class="isDark ? 'bg-gray-900 text-gray-300' : 'bg-white text-gray-900'"
    class="h-full flex flex-col transition-colors duration-300">

    {{ $slot }}


    <!-- Modals -->
    {{-- <x-modal id="editTaskModal">
        <form wire:submit.prevent="updateTask">
            <input type="hidden" wire:model="task_id">
            <input type="text" wire:model="task_title" class="w-full p-2 border rounded mb-4"
                placeholder="New Task Title">
            <div class="flex justify-end space-x-2">
                <button type="button" class="text-gray-500 cancelEditBtn">Cancel</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </x-modal> --}}

    {{-- <x-modal id="editFolderModal">
        <form wire:submit.prevent="updateFolder">
            <input type="hidden" wire:model="folder_id">
            <input type="text" wire:model="folder_title" class="w-full p-2 border rounded mb-4"
                placeholder="New Folder Title">
            <div class="flex justify-end space-x-2">
                <button type="button" class="text-gray-500 cancelEditBtn">Cancel</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </x-modal> --}}
    <!-- end Modals -->

    @livewireScripts
</body>

</html>
