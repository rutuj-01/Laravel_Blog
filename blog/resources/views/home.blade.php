@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                @foreach($posts as $post)
                  <div class="card">
                       <div class="card-body">
                        <a href=" {{ route('post.single',[$post->id]) }} "><div class="card-header" style="font-size: 20px">{{ $post->title }}</div></a>
                        <div class="card-text" style="font-size: 15px">{{ $post->desc }}</div>
                       </div>
                       <br>
                  </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
