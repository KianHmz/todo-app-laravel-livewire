<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class Update extends Component
{
    public $task_id, $task_title;

    protected $listeners = ['editTask'];

    public function editTask($id)
    {
        $task = Task::findOrFail($id);
        $this->task_id = $task->id;
        $this->task_title = $task->title;

        $this->dispatch('openModal', id: 'editTaskModal');
    }

    public function updateTask()
    {
        $task = Task::findOrFail($this->task_id);
        $task->update([
            'title' => $this->task_title,
        ]);

        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.tasks.update');
    }
}
