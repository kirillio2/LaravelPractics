<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
=======
use App\Models\Post;
use Illuminate\Http\Request;
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
use App\Models\Post;
use Illuminate\Http\Request;
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
=======
        return view('admin.post.create');
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
        return view('admin.post.create');
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->text = $request->text;
        $new_post->img = $request->img;
        $new_post->cat_id = $request->cat_id;
        $new_post->save();

        return redirect()->back()->withSuccess('Категория успешно добавлена!');
=======
        //
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
        //
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function show(string $id)
=======
    public function show(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
    public function show(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function edit(string $id)
=======
    public function edit(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
    public function edit(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(Request $request, string $id)
=======
    public function update(Request $request, Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
    public function update(Request $request, Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function destroy(string $id)
=======
    public function destroy(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
=======
    public function destroy(Post $post)
>>>>>>> cf14059931aaadd06cd44d6dac513fd45fbc4038
    {
        //
    }
}
