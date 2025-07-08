<?php

namespace App\Livewire;

use App\Models\Folder;
use Livewire\Component;

class FolderManager extends Component
{
    public $folders;
    public $selectedFolder = null;

    public $title = '';           // ایجاد فولدر جدید
    public $folder_id = null;     // ID فولدر در حال ویرایش
    public $folder_title = '';    // عنوان جدید در حالت ویرایش

    public $editingId = null;     // مشخص می‌کند کدام فولدر در حال ویرایش است

    protected $listeners = [
        'folderSelected' => 'select',
        'deleteFolder' => 'deleteFolder',
    ];

    public function mount()
    {
        $this->loadFolders();
    }

    public function loadFolders()
    {
        $this->folders = Folder::all();
    }

    // ایجاد فولدر جدید
    public function save()
    {
        $this->validate(['title' => 'required|max:255']);

        Folder::create(['title' => $this->title]);

        $this->title = '';
        $this->loadFolders();

        $this->dispatch('folderCreated');
    }

    // انتخاب فولدر
    public function select($id)
    {
        $this->selectedFolder = Folder::findOrFail($id);
        $this->folder_id = $this->selectedFolder->id;
        $this->folder_title = $this->selectedFolder->title;

        $this->dispatch('folderSelected', $id);
    }

    // شروع ویرایش
    public function editFolder($id)
    {
        $folder = Folder::findOrFail($id);

        $this->editingId = $folder->id;
        $this->folder_id = $folder->id;
        $this->folder_title = $folder->title;
    }

    // لغو ویرایش
    public function cancelEdit()
    {
        $this->editingId = null;
        $this->folder_id = null;
        $this->folder_title = '';
    }

    // ذخیره ویرایش
    public function updateFolder()
    {
        $this->validate(['folder_title' => 'required|max:255']);

        Folder::findOrFail($this->folder_id)->update([
            'title' => $this->folder_title,
        ]);

        $this->editingId = null;
        $this->folder_id = null;
        $this->folder_title = '';

        $this->loadFolders();
    }

    // حذف فولدر
    public function deleteFolder($id)
    {
        Folder::findOrFail($id)->delete();

        $this->loadFolders();

        if ($this->selectedFolder && $this->selectedFolder->id == $id) {
            $this->selectedFolder = null;
            $this->folder_id = null;
            $this->folder_title = '';
        }
    }

    public function render()
    {
        return view('livewire.folder-manager');
    }
}
