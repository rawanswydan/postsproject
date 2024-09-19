<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // استرجاع جميع الـ posts
        return view('posts.index', compact('posts')); // تمرير البيانات إلى العرض
    }

    // دوال أخرى ستضاف لاحقًا (create, store, edit, update, destroy)
    public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    Post::create($request->all());
    return redirect()->route('posts.index');
}
public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $post = Post::findOrFail($id);
    $post->update($request->all());
    return redirect()->route('posts.index');
}
public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('posts.index');
}
}
