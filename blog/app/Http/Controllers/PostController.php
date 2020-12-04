<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
    	return view('posts.index');
    }

    public function store(Request $request)
    {	
    	// echo $request->title;
    	$post= new Post();
 		$post->title = $request->title;
 		$post->desc=$request->description;
 		$post->user_id=auth()->user()->id;
 		$post->save();
 		return redirect() -> route('post.myposts');
    }

	public function myposts()
	{	
		
		$user_id=auth()->user()->id;
		$posts=Post:: where('user_id',$user_id)->orderBy('id','desc')->get();
		echo $posts;
		return view('posts.myposts',compact('posts'));

	}

}
