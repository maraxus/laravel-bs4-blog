<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //fetch all posts
    public function index()
    {
    	$posts = Post::orderBy('created_at','desc')->simplePaginate(\Config::get('constants.posts_per_page'));
    	return view('posts.index',compact('posts'));
    }
    //show individual posts
    public function show(Post $post)
    {
    	return view('posts.show',compact('post'));
    }
}