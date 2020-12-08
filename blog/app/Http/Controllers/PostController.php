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

    public function get($id)
    {
        $posts=Post::findOrFail($id);
        return view('posts.post',compact('posts'));
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
		
		return view('posts.myposts',compact('posts'));

	}

    public function allpost()
    {
        $user_id=auth()->user()->id;
        $posts=Post::where('user_id','!=',$user_id)->orderBy('id','desc')->get();
        return view('home',compact('posts'));

    }

    public function delete($post_id)
    {
        $user_id=auth()->user()->id;
        $post=Post::find($post_id);
        if($post->user_id == $user_id)
        {
            $post->delete();
        }
        return redirect('myposts');
    }

    public function edit($post_id)
    {
        $user_id=auth()->user()->id;
        $post=Post::find($post_id);
        if($post->user_id==$user_id)
        {
            return view('posts.edit',compact('post'));
        }
        else
        {
            return redirect()->route('posts/myposts');
        }

    }


    public function update(Request $request, $post_id)
    {
        $user_id=auth()->user()->id;
        $post=Post::find($post_id);
        if($post->user_id == $user_id)
        {
            $post->title = $request->title;
            $post->desc=$request->description;
            $post->save();
            return redirect('/myposts');
        }
        
    }

}
