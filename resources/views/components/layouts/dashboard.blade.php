<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="themeSwitcher()" :class="{ 'dark': isDark }"
    class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>To Do App</title>

    @livewireStyles
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Dropdown toggle via hidden checkbox */
        #user-menu-toggle:checked+label+ul {
            display: block;
        }
    </style>
</head>

<body :class="isDark ? 'bg-gray-900 text-gray-300' : 'bg-white text-gray-900'"
    class="h-full flex flex-col transition-colors duration-300">

    <div class="flex flex-1 min-h-0">

        {{ $slot }}

    </div>

    @livewireScripts
</body>

</html>
