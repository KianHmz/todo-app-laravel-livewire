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

    // for update
    public $editingId = null;
    public $newTitle = '';

    protected $listeners = ['folderSelected' => 'selectFolder'];


    public function mount()
    {
        $this->loadList();
    }

    public function selectFolder($folderId)
    {
        $this->folder = Folder::findOrFail($folderId);
        $this->loadList();
    }

    public function loadList()
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
        $this->loadList();
    }

    public function toggleStatus($id)
    {
        $task = Task::findOrFail($id);
        $task->status = $task->status === 0 ? 1 : 0;
        $task->save();

        $this->loadList();
    }

    public function edit($id)
    {
        $this->editingId = $id;
        $task = Task::findOrFail($id);
        $this->newTitle = $task->title;
    }

    public function cancel()
    {
        $this->reset('editingId', 'newTitle');
    }

    public function update()
    {
        $this->validate([
            'newTitle' => 'required|max:255'
        ]);
        Task::findOrFail($this->editingId)->update(['title' => $this->newTitle]);

        $this->reset('editingId', 'newTitle');
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
