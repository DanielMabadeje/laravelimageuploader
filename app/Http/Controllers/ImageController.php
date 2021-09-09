<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{


    public function Index()
    {
        return view("createimage");
    }
    public function addImage(Request $request)
    {
        $path = $request->file('image')->store('images', 's3');
        $image = Image::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);

        dd($image);
    }

    public function show()
    {
        # code...
    }
}
