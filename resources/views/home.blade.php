@extends('layouts.app')
@section('title')
@endsection
@section('content')
@if(!$post->count())
There is no post till now. Login and write a new post now!!!
@else
<div class="list-group">
  @foreach( $post as $post)
    <div class="list-group">
    <div class="list-group-item">
      <h3 autofocus="autofocus"><a href="comment/create/{{$post->id}}" class="text-muted">{{ $post->title }}</a></h3><a class="text-muted" href="/category/{{$post->categories_id}}/edit"><p>{{ $post->description }}</p></a>Category:{{$post->categories_id}}<br/></h3>
        @if(!Auth::guest() && ($post->user_id == Auth::user()->id || Auth::user()->is_admin()))

      @if($post->active == '0')
       
       <a href="/post/{{$post->id}}/edit" class="btn btn-info">Edit Post</a>
       <a href="/post/{{$post->id}}" class="btn btn-info">Remove</a>
      
      @else    
        @endif
        @endif
      <p class="text-muted">{{$post->created_at->format('M d,Y \a\t h:i a') }}By <b><u>{{ $post->user->name }}</u></b></p>
    </div>
     </div>
  @endforeach
</div>
  </li>
@endif
</li>
@endsection


