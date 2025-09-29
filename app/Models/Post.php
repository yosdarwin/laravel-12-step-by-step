<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function All()
    {
        return [
            [
                'title' => 'Judul Post Pertama',
                'slug' => 'judul-post-pertama',
                'author' => 'Yosdarwin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title' => 'Judul Post Kedua',
                'slug' => 'judul-post-kedua',
                'author' => 'Yosdarwin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title' => 'Judul Post Ketiga',
                'slug' => 'judul-post-ketiga',
                'author' => 'Yosdarwin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first((static::All()), fn($post) => $post['slug'] === $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
