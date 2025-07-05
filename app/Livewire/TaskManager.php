<?php

namespace App\Livewire;

use App\Models\Folder;
use Livewire\Component;
use App\Models\Task;

class TaskManager extends Component
{

    public function toggleTask($taskId)
    {
        $task = Task::findOrFail($taskId);
        $task->status = $task->status === 1 ? 0 : 1;
        $task->save();
        \Log::info("Task {$taskId} toggled to status {$task->status}");
    }

    public function destroy(): void
    {
        # code...
    }

    public function render()
    {
        $folders = Folder::all();
        $tasks = Task::all();

        return view('livewire.task-manager', [
            'folders' => $folders,
            'tasks' => $tasks
        ]);
    }
}
