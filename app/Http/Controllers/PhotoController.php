<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'photo_id' => 'required|string',
            'photo' => 'required|file'
        ]);
        $photo = new \App\Models\Photo();
        $photo->idx = $request->photo_id;
        $path = $request->file('photo')->store('photos');
        $photo->file_path = $path;
        $photo->save();

        return back()->with(['successMessage' => "Photo added successfully"]);
    }
    public function create()
    {
        return view('admin.create-photo');
    }
}
