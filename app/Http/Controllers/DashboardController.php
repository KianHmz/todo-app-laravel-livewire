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
        return view(
            'dashboard.index',
            [
                'folders' => $folders,
                'folderTitle' => $folder->title,
            ]
        );
    }
}
