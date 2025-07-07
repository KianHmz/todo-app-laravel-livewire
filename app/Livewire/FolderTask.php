<?php

namespace App\Livewire;

use App\Models\Folder;
use App\Models\Task;
use Livewire\Component;

class FolderTask extends Component
{
    public $selectedFolder = null;

    protected $listeners = ['folderSelected' => 'selectFolder'];

    public function selectFolder($id)
    {
        $this->selectedFolder = Folder::find($id);
    }

    public function render()
    {
        return view('livewire.folder-task', [
            'selectedFolder' => $this->selectedFolder,
        ]);
    }
}
