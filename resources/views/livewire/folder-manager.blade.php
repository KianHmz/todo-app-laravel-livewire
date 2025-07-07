<div>

    <!-- Folders sidebar -->
    <aside :class="isDark ? 'bg-gray-800 border-gray-700' : 'bg-gray-100 border-gray-200'"
        class="w-100 border-r p-6 flex flex-col">
        <h2 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-2xl font-semibold mb-6">Folders</h2>

        <!-- Folders list -->
        <ul class="flex-1 overflow-auto space-y-3">
            @foreach ($folders as $folder)
                <li wire:click.stop="select({{ $folder->id }})"
                    :class="isDark
                        ?
                        'text-gray-200 hover:bg-indigo-900' :
                        'text-gray-800 hover:bg-indigo-100'"
                    class="flex justify-between items-center p-3 rounded-md transition-colors duration-200 font-semibold text-lg
                    {{ $selectedFolder?->title === $folder->title ? 'shadow-sm shadow-indigo-900' : '' }}
                     ">

                    @if ($editingId === $folder->id)
                        <input type="text" wire:model.defer="folder_title" class="px-2 py-1 border rounded" />
                        <div class="space-x-2">
                            <button wire:click="updateFolder" class="text-green-600">save</button>
                            <button wire:click="cancelEdit" class="text-gray-500">cancel</button>
                        </div>
                    @else
                        <span>{{ $folder->title }}</span>

                        <div class="flex space-x-2">
                            <button wire:click.stop="editFolder( {{ $folder->id }} )"
                                :class="isDark ? 'text-indigo-400' : 'text-indigo-600'"
                                class="text-sm font-semibold hover:underline">Edit</button>

                            <button wire:click="deleteFolder({{ $folder->id }})"
                                class="text-red-500 text-sm font-semibold hover:underline cursor-pointer">Delete</button>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>

        <!-- create folder -->
        <form wire:submit.prevent="save" class="mt-6 flex space-x-3">
            <input type="text" wire:model="title" placeholder="New Folder" required
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

</div>
