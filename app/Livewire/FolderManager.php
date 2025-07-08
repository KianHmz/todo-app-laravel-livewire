<?php

namespace App\Livewire;

use App\Models\Folder;
use Livewire\Component;

class FolderManager extends Component
{
    // for read
    public $folders = [];
    public $selectedFolder = null;

    // for create
    public $title = '';

    // for update
    public $editingId = null;
    public $newTitle = '';


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
        $this->selectedFolder = Folder::findOrFail($id);
    }

    public function create()
    {
        $this->validate([
            'title' => 'required|max:255'
        ]);
        Folder::create(['title' => $this->title]);

        $this->reset('title');
        $this->loadList();
    }

    public function edit($id)
    {
        $this->editingId = $id;
        $folder = Folder::findOrFail($id);
        $this->newTitle = $folder->title;
    }

    public function cancel()
    {
        $this->reset('editingId', 'newTitle');
    }

    public function update()
    {
        $this->validate([
            'newTitle' => 'required|max:255'
        ]);
        Folder::findOrFail($this->editingId)->update(['title' => $this->newTitle]);

        $this->reset('editingId', 'newTitle');
        $this->loadList();
    }

    public function destroy($id)
    {
        Folder::findOrFail($id)->delete();
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.folder-manager');
    }
}
