<div>
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
</div>
