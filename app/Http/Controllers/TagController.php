<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(\App\Tag $tag)
    {
        $allPosts = $tag->posts;

        return view('posts.index', compact('allPosts'));
    }
}
