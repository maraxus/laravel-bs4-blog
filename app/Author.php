<?php

namespace App;

use \App\Post;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Author has many posts
    public function posts(){
    	return $this->hasMany(Post::class);
    }
}
