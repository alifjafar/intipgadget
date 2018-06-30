<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use App\Tag;

class ArticleController extends Controller
{
    public function getSingle($slug)
    {
        $post = Post::onslug($slug)->first();

        if ($post) {
            return view('blog.posts.single', [
                'post' => $post
            ]);
        } elseif ($slug == 'dapur') {
            return redirect('/dapur/dashboard');
        } else {
            return abort(404);
        }
    }

    public function getPostByAuthor($username)
    {
        $user = User::isusername($username);
        $posts = $user->posts()->paginate(6);

        return view('blog.pages.author', [
            'posts' => $posts,
            'author' => $user,
        ]);
    }

    public function getPostByCategory($slug)
    {
        $cat = Category::onslug($slug)->first();
        $posts = $cat->posts()->paginate(6);

        return view('blog.pages.category', [
            'posts' => $posts
        ]);
    }

    public function getPostByTag($slug)
    {
        $tag = Tag::onslug($slug)->first();
        $posts = $tag->posts()->paginate(6);

        return view('blog.pages.tag', [
            'posts' => $posts,
            'tags' => $tag
        ]);
    }
}
