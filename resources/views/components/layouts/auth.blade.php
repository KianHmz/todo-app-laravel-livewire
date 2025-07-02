<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="themeSwitcher()" :class="{ 'dark': isDark }"
    class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? 'to do app' }}</title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body :class="isDark ? 'bg-gray-900' : 'bg-gray-100'"
    class="h-full flex items-center justify-center transition-colors duration-300">

    <div class="w-full max-w-md p-8 space-y-6 rounded-xl shadow-lg transition-all"
        :class="isDark ? 'bg-gray-800' : 'bg-white'">

        {{ $slot }}

    </div>

    <x-theme-toggler class="fixed bottom-4 right-4 p-3" />

    </script>
</body>

</html>
