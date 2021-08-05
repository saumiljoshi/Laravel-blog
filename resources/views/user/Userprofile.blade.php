@extends('layouts.app')
@section('title')
@endsection
@section('content')
@foreach($comment as $comments)

@endforeach


@if($comments->user == Auth::user()->id)
<h5>all comments</h5>
<p>
{{$comments->comments}}</p>
@endif
<h3 class="text-center">User Profile</h3>
<div class="text-center">
    <div class="card">
    <table class="table table table-striped table">
        <thead class="card-body">
        <tr>
            <th>User-Post:</th>
            <th>Categories</th>
            </tr>
        </thead>
<tbody>
        <tr>
            @foreach($post as $posts)
            @if($posts->user_id == Auth::user()->id)
       <td>{{$posts->title}}<p class="text-muted">{{$posts->description}}</p></td>
       <td>{{$posts->categories}}</td>
</tr>
</tbody>
@endif
@endforeach
    </table>
    </div>
</div>

@endsection  