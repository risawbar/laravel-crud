<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        $title = "";
        $us = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $us = ' by ' . $user->name;
        }
        return view('posts', [
            "title" => "All Post" . $title . $us,
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
            "active" => "posts"
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single",
            "post" => $post,
            "active" => "posts"
        ]);
    }
}
