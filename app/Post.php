<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //pass a formated, pretty created date
    public function created_time() {
    	return $this->created_at;
    }
}
