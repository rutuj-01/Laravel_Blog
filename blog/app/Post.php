<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{
    
	public function comments()
	{
		return $this->hasMany('App\Comment','post_id','id');
	}

	public function user()
	{
		return $this->hasOne('App\User','id','user_id');
	}


}
