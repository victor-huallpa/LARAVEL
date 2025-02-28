<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post, $category = null)
    {
        // return view('posts.show', [
        //     'post' => $post, 
        //     'category' => $category
        // ]);

        return view('posts.show', compact('post', 'category'));
    }
}
