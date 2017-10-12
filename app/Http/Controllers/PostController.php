<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //fetch all posts
    public function index()
    {
    	$posts = Post::all();
    	return view('posts.index',compact('posts'));
    }
    //show individual posts
    public function show(Post $post)
    {
    	return view('posts.show',compact('post'));
    }
}