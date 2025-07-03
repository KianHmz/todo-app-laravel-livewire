<x-layouts.dashboard>

    <!-- Sidebar -->
    <aside :class="isDark ? 'bg-gray-800 border-gray-700' : 'bg-gray-100 border-gray-200'"
        class="w-100 border-r p-6 flex flex-col">
        <h2 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-2xl font-semibold mb-6">Folders</h2>
        <ul class="flex-1 overflow-auto space-y-3">

            @foreach ($folders as $folder)
                <a href="{{ route('dashboard.index', $folder->id) }}"
                    :class="isDark
                        ?
                        'text-gray-200 hover:bg-indigo-900' :
                        'text-gray-800 hover:bg-indigo-100'"
                    class="flex justify-between items-center p-3 rounded-md transition-colors duration-200 font-semibold text-lg
                    {{ request()->route('folder')?->id === $folder->id ? 'shadow-sm shadow-indigo-900' : '' }}">
                    {{ $folder->title }}
                    <span class="font-semibold" x-text="folder"></span>
                    <div class="flex space-x-2">
                        <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                            class="text-sm font-semibold hover:underline">Edit</button>
                        <button class="text-red-500 text-sm font-semibold hover:underline">Delete</button>
                    </div>
                </a>
            @endforeach

        </ul>

        <form method="POST" action="{{ route('folders.store') }}" class="mt-6 flex space-x-3">
            @csrf
            <input type="text" name="title" placeholder="New Folder" required
                :class="isDark
                    ?
                    'bg-gray-700 border-gray-600 text-gray-300' :
                    'bg-white border border-gray-300 text-gray-900'"
                class="flex-1 px-3 py-2 rounded-md" />
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 rounded-md transition-colors duration-200">
                Add
            </button>
        </form>
    </aside>

    <!-- Main content -->
    <main :class="isDark ? 'bg-gray-900' : 'bg-white'"
        class="flex-1 p-8 flex flex-col relative transition-colors duration-300">

        <!-- User dropdown and theme toggle -->
        <div class="flex justify-end mb-6 relative z-10 space-x-4">
            <input type="checkbox" id="user-menu-toggle" class="hidden" />
            <label for="user-menu-toggle"
                :class="isDark ? 'bg-gray-800 text-indigo-400 hover:bg-gray-700' :
                    'bg-gray-100 text-indigo-600 hover:bg-gray-200'"
                class="flex items-center cursor-pointer select-none rounded-md px-4 py-2 font-semibold transition-colors duration-200">
                user_name
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </label>

            <x-theme-toggler />
        </div>

        <h1 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-3xl font-bold mb-8">
            {{ $folderTitle }}
        </h1>

        <ul class="space-y-5 flex-1 overflow-auto">
            <li :class="isDark
                ?
                'bg-gray-800 border-gray-700 text-gray-300' :
                'bg-gray-100 border-gray-200 text-gray-900'"
                class="flex items-center justify-between p-4 rounded-lg shadow-lg">
                <label class="flex items-center space-x-4 cursor-pointer">
                    <input type="checkbox" checked
                        :class="isDark ? 'bg-gray-700 border-gray-600' : 'bg-white border-gray-300'"
                        class="w-6 h-6 text-indigo-500 rounded" />
                    <span class="line-through text-lg select-none">Finish report</span>
                </label>
                <div class="flex space-x-4">
                    <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                        class="text-sm font-semibold hover:underline">Edit</button>
                    <button class="text-red-500 text-sm font-semibold hover:underline">Delete</button>
                </div>
            </li>

            <li :class="isDark
                ?
                'bg-gray-800 border-gray-700 text-gray-300' :
                'bg-gray-100 border-gray-200 text-gray-900'"
                class="flex items-center justify-between p-4 rounded-lg shadow-lg">
                <label class="flex items-center space-x-4 cursor-pointer">
                    <input type="checkbox" :class="isDark ? 'bg-gray-700 border-gray-600' : 'bg-white border-gray-300'"
                        class="w-6 h-6 text-indigo-500 rounded" />
                    <span class="text-lg select-none">Email client</span>
                </label>
                <div class="flex space-x-4">
                    <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                        class="text-sm font-semibold hover:underline">Edit</button>
                    <button class="text-red-500 text-sm font-semibold hover:underline">Delete</button>
                </div>
            </li>
        </ul>

        <form class="mt-8 flex space-x-4" onsubmit="return false;">
            <input type="text" placeholder="New Task" required
                :class="isDark
                    ?
                    'bg-gray-700 border-gray-600 text-gray-300' :
                    'bg-white border border-gray-300 text-gray-900'"
                class="flex-1 px-4 py-3 rounded-lg" />
            <button class="bg-green-600 hover:bg-green-700 text-white px-6 rounded-lg transition-colors duration-200">
                Add
            </button>
        </form>
    </main>

</x-layouts.dashboard>
