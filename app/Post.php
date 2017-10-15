<?php

namespace App;

use App\Author;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //pass a formated, pretty created date
    public function created_time() {
    	return $this->created_at->format('F j, Y');
    }

    public function author() {
    	return $this->belongsTo(Author::class);
    }
}
