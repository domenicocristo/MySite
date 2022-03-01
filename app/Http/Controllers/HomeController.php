<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
  public function home() {
    $posts = Post::all();

    return view('pages.home', compact('posts'));
  }

  public function register_btn() {
    return view('pages.register_btn');
  }

  public function login_btn() {
    return view('pages.login_btn');
  }
}