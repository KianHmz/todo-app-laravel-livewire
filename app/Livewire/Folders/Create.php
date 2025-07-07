<?php

namespace App\Livewire\Folders;

use App\Models\Folder;
use Livewire\Component;

class Create extends Component
{
    public $title;

    public function save()
    {
        $this->validate(['title' => 'required|max:255']);
        Folder::created(['title' => $this->title]);

        $this->title = '';
        $this->dispatch('folderCreated');
    }

    public function render()
    {
        return view('livewire.folders.create');
    }
}
