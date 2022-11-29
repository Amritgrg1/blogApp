<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //

    public function login()
    {
         return view('login');

    }

    public function dashboard()
    {
          $posts = Post::where('user_id', '=', auth()->user()->id)->get();
          // dd($posts);
         return view('dashboard', compact('posts'));

    }

    public function register()
    {
         return view('register');

    }

}
