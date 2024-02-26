<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('admin.schedule.index');

        // $posts_count = Post::all()->count();

        // return view('admin.home.index', [
        //     'posts_count' => $posts_count
        // ]);
    }
}
