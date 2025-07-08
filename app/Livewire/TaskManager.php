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

    // for create
    public $title = '';

    protected $listeners = ['folderSelected' => 'selectFolder'];


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

    public function create()
    {
        $this->validate([
            'title' => 'required|max:255'
        ]);
        Task::create([
            'folder_id' => $this->folder->id,
            'title' => $this->title,
        ]);

        $this->reset('title');
        $this->load();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
