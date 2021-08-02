@extends('layouts.app')
@section('title')
@endsection
@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="/">Home</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
        <li>
          <a href="/login">Login</a>
        </li>
        <li>
          <a href="/register">Register</a>
        </li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @if (Auth::user()->can_post())
            <li>
              <a href="/new-post">Add new post</a>
            </li>
            <li>
              <a href="{{Auth::id().'/posts' }}">My Posts</a>
            </li>
            @endif
            <li>
              <a href="/user/{{Auth::id()}}">My Profile</a>
            </li>
              <li>
                <a href="/logout">Logout</a>
              </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
@if(!$post->count())
There is no post till now. Login and write a new post now!!!
@else
<div class="list-group">
  @foreach( $post as $post)
    <div class="list-group">
    <div class="list-group-item">
      <h3 autofocus="autofocus"><a href="comment/posts/{{$post->id}}">{{ $post->title }}</a></h3><a href="/category/edit/{{$post->categories}}"><p>{{ $post->description }}</p></a>
        @if(!Auth::guest() && ($post->user_id == Auth::user()->id || Auth::user()->is_admin()))
        @if($post->active == '0')
       <a href="/posts/edit/{{$post->id}}" class="btn btn-primary">Edit Post</a>
       <a href="/posts/delete/{{$post->id}}" class="btn btn-primary">Remove</a>
        @else    
        @endif
        @endif
      </h3>
      <p>{{$post->created_at->format('M d,Y \a\t h:i a') }}By<a href="/profile">{{ $post->user->name }}</a></p>
    </div>
     </div>
  @endforeach
</div>
    <li><a href="/new-post">Add New Post</a></li>
</li>
@endif
</li>
<a href="/logout">Logout</a>
@endsection
