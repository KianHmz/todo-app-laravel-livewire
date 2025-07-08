<?php

namespace App\Livewire;

use App\Models\Folder;
use Livewire\Component;

class FolderManager extends Component
{
    public $folders = [];
    public $selectedFolder = null;

    public function mount()
    {
        $this->loadList();
    }

    public function loadList()
    {
        $this->folders = Folder::all();
    }

    public function select($id)
    {
        $this->selectedFolder = Folder::find($id);
    }

    public function create()
    {

    }

    public function edit($id)
    {

    }

    public function cancel()
    {

    }

    public function update()
    {

    }

    public function render()
    {
        return view('livewire.folder-manager');
    }
}
