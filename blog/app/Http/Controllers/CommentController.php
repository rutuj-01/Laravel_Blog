<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
   	public function commentor(Request $request,$id)
   	{	
   		$comment=new Comment();
   		$comment->comment = $request->comment;
   		$comment->post_id=$id;
   		$comment->user_id=auth()->user()->id;
   		echo $request->user_id;
   		echo $comment->comment;
   		echo $comment->post_id;
   		$comment->save();
   		return redirect()->route('post.single',[$id]);
   	}
}
