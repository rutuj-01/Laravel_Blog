@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                @foreach($posts as $post)
                  <div class="card">
                       <div class="card-body">
                        <div class="card-header" style="font-size: 20px">{{ $post->title }}</div>
                        <div class="card-text" style="font-size: 17px">{{ $post->desc }}</div>
                       </div>
                  </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
