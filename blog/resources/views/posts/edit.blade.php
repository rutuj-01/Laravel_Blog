@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="container">
		<form action="{{ route('post.update',[$post->id]) }}" method="post">
			@csrf
			<div class="form-group">
				<label>Title</label>
				<br>
				<input type="text" name="title" value="{{ $post->title }}" >
			</div>

			<div class="form-group">
				<label>Description</label>

				<br>
				
				<input type="text" name="description" value="{{ $post->desc }}">
			</div>

			<input type="submit" name="submit">
		</form>
	</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
@endsection