<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('images'), $imageName);

        return response()->json(['success'=>'You have successfully upload file.']);
    }
}
