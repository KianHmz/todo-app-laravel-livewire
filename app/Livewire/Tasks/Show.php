<?php

namespace App\Livewire\Tasks;

use App\Models\Folder;
use App\Models\Task;
use Livewire\Component;

class Show extends Component
{
    public $tasks = [];
    public $folderId;
    public $selectedFolder = null;

    protected $listeners = [
        'folderSelected' => 'loadTasks',
        'taskCreated' => 'loadTasks'
    ];

    public function loadTasks($id)
    {
        $this->folderId = $id;
        $this->tasks = Task::where('folder_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.tasks.show');
    }
}
