<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class DashboardController extends Controller
{

    public function index(Folder $folder)
    {
        $folders = Folder::all();
        $tasks = Task::where('folder_id',$folder->id)->get();
        return view(
            'dashboard.index',
            [
                'folders' => $folders,
                'tasks' => $tasks,
            ]
        );
    }
}
