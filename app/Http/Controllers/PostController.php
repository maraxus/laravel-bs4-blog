<?php

namespace App\Http\Controllers;

//use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //fetch all posts
    public function index()
    {
    	return view('posts.index');
    }
}