<?php

use App\Post;

function recent_post() {

    $recentPost = Post::published()
        ->latest()
        ->take(7)
        ->get();

    return $recentPost;
}
?>