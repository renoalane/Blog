<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reno Alane",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis dignissimos pariatur saepe. Beatae distinctio, autem perferendis nisi minima, vero illo deserunt atque illum, non facilis cupiditate? Eum, ratione suscipit?"
        ]
    ];

    public static function all()
    {
        // self untuk property statik
        // collect magic php pada array
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        //static untuk method static
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        // simple pake collection
        return $posts->firstWhere('slug', $slug);
    }
}
