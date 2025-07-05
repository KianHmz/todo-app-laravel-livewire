<x-layouts.dashboard>

    <!-- Folders sidebar -->
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

                    <div class="flex space-x-2">
                        <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                            class="text-sm font-semibold hover:underline">Edit</button>

                        <form action="{{ route('folders.destroy', $folder->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-500 text-sm font-semibold hover:underline cursor-pointer">Delete</button>
                        </form>
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
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 rounded-md transition-colors duration-200">
                Add
            </button>
        </form>
    </aside>
    <!-- end Folders sidebar -->

    <main :class="isDark ? 'bg-gray-900' : 'bg-white'"
        class="flex-1 p-8 flex flex-col relative transition-colors duration-300">

        <!-- user dropdown & theme toggler -->
        <div class="flex justify-end mb-6 relative z-10 space-x-4">
            <x-user-drop-down />
            <x-theme-toggler />
        </div>


        <!-- Tasks list -->
        <h1 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-3xl font-bold mb-8">
            {{ request()->route('folder')?->title }}
        </h1>

        <ul class="space-y-5 flex-1 overflow-auto">
            @foreach ($tasks as $task)
                <li :class="isDark
                    ?
                    'bg-gray-800 border-gray-700 text-gray-300' :
                    'bg-gray-100 border-gray-200 text-gray-900'"
                    class="flex items-center justify-between p-4 rounded-lg shadow-lg">

                    <form action="{{ route('tasks.toggle', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit">
                            <label class="flex items-center space-x-4 cursor-pointer">
                                <input name="status" type="checkbox" disabled
                                    {{ $task->status === 1 ? 'checked' : '' }}
                                    :class="isDark ? 'bg-gray-700 border-gray-600' : 'bg-white border-gray-300'"
                                    class="w-6 h-6 text-indigo-500 rounded" />

                                <span type="submit"
                                    class="{{ $task->status === 1 ? 'line-through' : '' }} text-lg select-none">
                                    {{ $task->title }}
                                </span>
                            </label>
                        </button>
                    </form>

                    <div class="flex space-x-4">
                        <a :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                            class="text-sm font-semibold hover:underline cursor-pointer edit-task-btn"
                            data-id="{{ $task->id }}" data-title="{{ $task->title }}">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-500 text-sm font-semibold hover:underline cursor-pointer">Delete</button>
                        </form>
                    </div>

                </li>
            @endforeach
        </ul>
        <!-- end Tasks list-->

        <!-- create task -->
        <form method="POST" action="{{ route('tasks.store') }}" class="mt-8 flex space-x-4">
            @csrf
            <input type="hidden" name="folder_id" value="{{ request()->route('folder')->id }}">
            <input type="text" name="title" placeholder="New Task" required
                :class="isDark
                    ?
                    'bg-gray-700 border-gray-600 text-gray-300' :
                    'bg-white border border-gray-300 text-gray-900'"
                class="flex-1 px-4 py-3 rounded-lg" />
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 rounded-lg transition-colors duration-200">
                Add
            </button>
        </form>
        <!-- end create task -->

    </main>

</x-layouts.dashboard>
