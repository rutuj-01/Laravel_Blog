@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container" >
      @foreach($posts as $post)
          <div class="card">
               <div class="card-body">
                <div class="card-header" style="font-size: 20px">{{ $post->title }}</div>
                <div class="card-text" style="font-size: 17px">{{ $post->desc }}</div>
               </div>
        </div>
    @endforeach
	</div>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
@endsection