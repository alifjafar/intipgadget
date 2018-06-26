<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function getPage($slug)
    {
        $post = Page::onslug($slug)->first();

        return view('blog.pages.single', [
            'post' => $post
        ]);
    }
}
