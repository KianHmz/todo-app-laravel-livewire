<?php

namespace App\Livewire;

use App\Models\Folder;
use Livewire\Component;

class FolderManager extends Component
{
    public $folders = [];
    public $selectedFolder = null;

    public $title = '';


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
        $validated = $this->validate([
            'title' => 'required|max:255'
        ]);
        Folder::create($validated);

        $this->reset('title');
        $this->loadList();
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
