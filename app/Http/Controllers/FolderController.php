<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        Folder::create($validated);

        return redirect()->back();
    }

    public function update(Request $request, Folder $folder)
    {
        //
    }

    public function destroy(Folder $folder)
    {
        $folder->delete();
        return redirect()->back();
    }
}
