<?php

namespace App\Livewire\Folders;

use App\Models\Folder;
use Livewire\Component;

class Show extends Component
{
    public $folders;
    public $selectedFolder = null;

    protected $listeners = ['folderSelected' => 'select'];

    public function mount()
    {
        $this->folders = Folder::all();
    }

    public function select($id)
    {
        $this->selectedFolder = Folder::findOrFail($id);
        $this->dispatch('folderSelected', id: $id);
    }

    public function render()
    {
        return view('livewire.folders.show');
    }
}
