<?php

namespace App\Livewire\Folders;

use App\Models\Folder;
use Livewire\Component;

class Update extends Component
{
    public $folder_id, $folder_title;

    protected $listeners = ['editFolder'];

    public function editFolder($id)
    {
        $folder = Folder::findOrFail($id);
        $this->folder_id = $folder->id;
        $this->folder_title = $folder->title;

        $this->dispatch('openModal', id: 'editFolderModal');
    }

    public function updateFolder()
    {
        $folder = Folder::findOrFail($this->folder_id);
        $folder->update([
            'title' => $this->folder_title,
        ]);

        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.folders.update');
    }
}
