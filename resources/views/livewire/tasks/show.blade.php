<div>
    <ul class="space-y-5 flex-1 overflow-auto">
        @foreach ($tasks as $task)
            <li :class="isDark
                ?
                'bg-gray-800 border-gray-700 text-gray-300' :
                'bg-gray-100 border-gray-200 text-gray-900'"
                class="flex items-center justify-between p-4 rounded-lg shadow-lg">

                <div class="flex items-center space-x-4 cursor-pointer">
                    <input wire:click="toggleTask({{ $task->id }})" type="checkbox" disabled
                        {{ $task->status ? 'checked' : '' }}
                        :class="isDark ? 'bg-gray-700 border-gray-600' : 'bg-white border-gray-300'"
                        class="w-6 h-6 text-indigo-500 rounded" />
                    <span class="{{ $task->status ? 'line-through text-gray-500' : '' }} text-lg select-none">
                        {{ $task->title }}
                    </span>
                </div>

                <div class="flex space-x-4">
                    <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                        class="text-sm font-semibold hover:underline cursor-pointer edit-task-btn"
                        wire:click="edit({{ $task->id }})">
                        Edit
                    </button>

                    <button wire:click="deleteTask({{ $task->id }})"
                        class="text-red-500 text-sm font-semibold hover:underline cursor-pointer">Delete</button>
                </div>

            </li>
        @endforeach
    </ul>
</div>
