<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ApiController extends Controller
{
    public function getPosts() {
        $posts = Post::all();

        return json_encode($posts);
    }
}