<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function dropzoneFile()
    {
        return view('dropzone_file_upload');
    }

    public function dropzoneUploadFile(Request $request)
    {
        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('images'), $imageName);
        return response()->json(['success' => $imageName]);
    }
}
