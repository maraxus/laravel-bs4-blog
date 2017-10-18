<?php

namespace App\Http\Controllers;

use \App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //show all posts from a given author
    public function showPosts(Author $author) {
    	$posts = $author->posts()->orderBy('created_at','desc')->paginate(\Config::get('constants.posts_per_page'));
    	return view('author.showPosts', compact('posts'));
    }
}
