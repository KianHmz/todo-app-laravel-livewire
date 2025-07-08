<?php

namespace App\Livewire;

use App\Models\Folder;
use App\Models\Task;
use Livewire\Component;

class FolderTask extends Component
{

    public function render()
    {
        return view('livewire.folder-task');
    }
}
