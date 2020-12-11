@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card">
                       <div class="card-body">
                        <div class="card-header" style="font-size: 20px">{{ $posts->title }}</div>
                        
                        
                        <div class="card-text" ><label>Author:{{ $posts->user->name }} </label>  </div>
                        <div class="card-text" style="font-size: 15px">{{ $posts->desc }}</div>
                       </div>
                       <br>
                  </div>  

                  <form action=" {{ route('post.comment',[$posts->id]) }} " method="post">
                    @csrf
                    <div class='form-group'>
                        <label style="font-size: 15px; padding-left: 15px;">Write a comment</label>
                        <textarea class="form-control" name="comment" rows='2'></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"> Post Comment</button>
                  </form>
                  <br>
                  <ul class="list-group">
                    @foreach($posts->comments as $comment)

                    <ul class="list-group-items" style="font-size: 15px; padding-left: 50px;"> {{ $comment->comment }} <br><small> {{ $comment->user->name }} </small><hr>  </ul>

                    @endforeach
                  </ul>



            </div>
          </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection