<?php

namespace App\Livewire;

use App\Models\Folder;
use App\Models\Task;
use Livewire\Component;

class TaskManager extends Component
{
    // for read
    public $tasks = [];
    public $folder = null;

    protected $listeners = ['folderSelected' => 'selectFolder', 'load'];


    public function mount()
    {
        $this->load();
    }

    public function selectFolder($folderId)
    {
        $this->folder = Folder::findOrFail($folderId);
        $this->load();
    }

    public function load()
    {
        $this->folder?->id ?
            $this->tasks = Task::where('folder_id', $this->folder->id)->get()
            :
            $this->tasks = [];
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
