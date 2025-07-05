<div>

    <ul class="space-y-5 flex-1 overflow-auto">

        @foreach ($tasks as $task)
            <li :class="isDark
                ?
                'bg-gray-800 border-gray-700 text-gray-300' :
                'bg-gray-100 border-gray-200 text-gray-900'"
                class="flex items-center justify-between p-4 rounded-lg shadow-lg">

                <label wire:click="toggleTask({{ $task->id }})" class="flex items-center space-x-4 cursor-pointer">
                    <input wire:model="task.status" type="checkbox" {{ $task->status === 1 ? 'checked' : '' }}
                        :class="isDark ? 'bg-gray-700 border-gray-600' : 'bg-white border-gray-300'"
                        class="w-6 h-6 text-indigo-500 rounded" />

                    <span class="{{ $task->status === 1 ? 'line-through' : '' }} text-lg select-none">
                        {{ $task->title }}
                    </span>
                </label>

                <div class="flex space-x-4">
                    <button wire:click="edit" :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                        class="text-sm font-semibold hover:underline">Edit</button>
                    <button wire:click="destroy"
                        class="text-red-500 text-sm font-semibold hover:underline">Delete</button>
                </div>
            </li>
        @endforeach

    </ul>

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

</div>
