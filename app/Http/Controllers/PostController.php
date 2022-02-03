<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = " In " . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = " By " . $author->name;
        }

        // Menagkap hasil search name di input

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => Post::all()

            // meningkatkan performance tidak mengulangi query cek di clockwork

            // Eager Load

            // filter dari model scopeFilter

            //Paginate for pagination
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

            // terlalu banyak queey yang di loop Post::all();
        ]);
    }

    public function show(Post $post)
    {

        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
