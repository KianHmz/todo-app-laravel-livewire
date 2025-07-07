<div>
    <ul class="flex-1 overflow-auto space-y-3">
        @foreach ($folders as $folder)
            <li wire:click="select({{ $folder->id }})"
                :class="isDark
                    ?
                    'text-gray-200 hover:bg-indigo-900' :
                    'text-gray-800 hover:bg-indigo-100'"
                class="flex justify-between items-center p-3 rounded-md transition-colors duration-200 font-semibold text-lg
                    {{ $selectedFolder?->title === $folder->title ? 'shadow-sm shadow-indigo-900' : '' }}
                     ">
                {{ $folder->title }}

                <div class="flex space-x-2">
                    <button :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                        class="text-sm font-semibold hover:underline">Edit</button>

                    <form wire:submit.prevent="$emit('deleteFolder', {{ $folder->id }})">
                        <button type="submit"
                            class="text-red-500 text-sm font-semibold hover:underline cursor-pointer">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
