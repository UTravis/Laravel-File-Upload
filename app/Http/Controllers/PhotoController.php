<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        //dd($request->file());
        $name = $request->file('photo')->getClientOriginalName();
        $size = $request->file('photo')->getSize();

        $request->file('photo')->storeAs('/public/images/', $name);

        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();

        return redirect()->back();
    }

    public function photos()
    {
        $photos = Photo::all();
        return view('photos', compact('photos'));
    }
}
