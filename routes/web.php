<?php

Route::get('/', function () {
    return view('blog.index');
});

Route::get('/','BlogController@index')->name('blog');
Route::get('/news', 'BlogController@news')->name('news');
Route::get('/{slug}', 'ArticleController@getSingle')->name('getSingle');
Route::get('page/{slug}', 'PageController@getPage')->name('getPage');
Route::get('/author/@{username}', 'ArticleController@getPostByAuthor')->name('author_post');
Route::get('/category/{slug}', 'ArticleController@getPostByCategory')->name('category_post');
Route::get('/tag/{slug}', 'ArticleController@getPostByTag')->name('tag_post');
Route::get('/dapur')->name('admin');


Route::group(['prefix' => 'dapur'], function () {
    Voyager::routes();
});

Route::get('/coba', function () {
    $coba = App\Post::published()->first();
    return $coba->full_name;
});
