<?php

namespace App\Http\Controllers;

use \App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //show all posts from a given author
    public function showPosts(Author $author) {
    	$posts = $author->posts()->paginate(1);
    	return view('author.showPosts', compact('posts'));
    }
}
