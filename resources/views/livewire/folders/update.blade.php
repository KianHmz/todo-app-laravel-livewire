<div id="editFolderModal" class="fixed inset-0 bg-black/30 hidden justify-center items-center z-50">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg w-1/3 relative">
        <button class="absolute top-2 right-2 text-gray-400 closeModalBtn">&times;</button>
        <form wire:submit.prevent="updateFolder">
            <input type="hidden" wire:model="folder_id">
            <input type="text" wire:model="folder_title" class="w-full p-2 border rounded mb-4"
                placeholder="New Folder Title">
            <div class="flex justify-end space-x-2">
                <button type="button" class="text-gray-500 cancelEditBtn">Cancel</button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('openModal', ({ id }) => {
            const modal = document.getElementById(id);
            if (modal) modal.classList.remove('hidden');
        });

        Livewire.on('closeModal', () => {
            const modal = document.getElementById('editFolderModal');
            if (modal) modal.classList.add('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.closeModalBtn, .cancelEditBtn').forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = document.getElementById('editFolderModal');
                if (modal) modal.classList.add('hidden');
            });
        });
    });
</script>

