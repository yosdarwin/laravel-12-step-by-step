<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['nama' => 'Yosdarwin']);
});
Route::get('/blog', function () {
    return view('blog', [
        'posts' => Post::All()
    ]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('blog-detail', ['post' => $post]);
});
Route::get('/contact', function () {
    return view('contact');
});
