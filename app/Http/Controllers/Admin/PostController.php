<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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

        $categories = Category::all();

        return view('admin.post.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->text = $request->text;
        $new_post->img = $request->img;
        $new_post->cat_id = $request->cat_id;
        $new_post->save();

        return redirect()->back()->withSuccess('Категория успешно добавлена!');
    }

    /**
     * Display the specified resource.
     */



    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Post $post)
    {
        //
    }
}
