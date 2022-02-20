<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class GuestController extends Controller
{
    public function create() {
        $posts = Post::all();
        
        return view('pages.create', compact('posts'));
    }

    public function store(Request $request) {
        $data = $request -> validate([
            'title' => 'required|string|max:60',
            'text' => 'required|string',
        ]);

        $imageFile = $request->file('image');
        $imageName = rand(100000,999999) . '_' . time() . '.' . $imageFile->getClientOriginalName();
        $imageFile->storeAs('/asset/', $imageName, 'public');
        $data['image'] = $imageName;
        Post::create($data);

        return redirect()->route('home');
    }
}