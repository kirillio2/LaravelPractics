<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {     
        // return view('home');

        $posts_count = Post::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count
        ]);
    }
}
