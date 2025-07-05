<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'folder_id' => 'required',
        ]);

        Task::create($validated);

        return redirect()->back();
    }

    public function toggle(Task $task)
    {
        $task->status = $task->status === 1 ? 0 : 1;
        $task->save();
        return redirect()->back();
    }

    public function update(Request $request, Task $task)
    {
        $task->status = $request->input('status');
        $task->save();

        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        Task::destroy($task->id);
        return redirect()->back();
    }
}
