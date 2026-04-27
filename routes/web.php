<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['nama' => 'Yosdarwin']);
});
Route::get('/blog', function () {
    return view('blog', [
        'posts' => Post::All(),
        'title' => "Blog"
    ]);
});
Route::get('/author/{user:username}', function (User $user) {
    return view('blog', [
        'posts' => $user->posts,
        'title' => 'Posts by ' . $user->name
    ]);
});
Route::get('/category/{category:slug}', function (Category $category) {
    return view('blog', [
        'posts' => $category->posts,
        'title' => 'Posts in ' . $category->name . ' (' . count($category->posts) . ')'
    ]);
});
Route::get('/blog/{post:slug}', function (Post $post) {
    return view('blog-detail', ['post' => $post]);
});
Route::get('/contact', function () {
    return view('contact');
});
