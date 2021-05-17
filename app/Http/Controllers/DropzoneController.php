<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extention();
        $image->move(public_path('images'), $imageName);

        return response()->json(['success' => $imageName]);
    }
}
