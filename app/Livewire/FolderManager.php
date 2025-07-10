<?php

namespace App\Livewire;

use App\Models\Folder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FolderManager extends Component
{
    public $userId = null;

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
        $this->userId = Auth::user()->id;
        $this->loadList();
    }

    public function loadList()
    {
        $this->folders = Folder::where('user_id', $this->userId)->get();
    }

    public function select($id)
    {
        $this->selectedFolder = Folder::findOrFail($id);
        $this->dispatch('folderSelected', $id);
    }

    public function create()
    {
        $this->validate([
            'title' => 'required|max:255'
        ]);

        Folder::create([
            'user_id' => $this->userId,
            'title' => $this->title
        ]);

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

        Folder::findOrFail($this->editingId)->update([
            'title' => $this->newTitle
        ]);

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
