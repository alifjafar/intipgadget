<?php

namespace App\Http\Controllers;

use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest();
        return view('blog.index', [
            'posts' => $posts->paginate(6),
            'featuredPost' => $posts->featured()
        ]);
    }

    public function news()
    {
        $posts = Post::published()->latest()->paginate(6);
        return view('blog.news', [
            'posts' => $posts
        ]);
    }
}
