<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'posts' => Post::latest()->paginate(6),
        ]);
        // $posts = Post::orderBy("created_at","desc")->paginate(10);
    }

    public function show(Post $post)
    {
        return view ('post.show', [
            'post' => $post,
        ]);
    }
}
