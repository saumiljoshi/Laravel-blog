@extends('layouts.app')
@section('title')
@endsection
@section('content')




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
             @foreach($categories as $category)
             <p>{{$category->name}}</p>
            @endforeach
            @if($posts->user_id == Auth::user()->id)
            
            <td>{{$posts->title}}<p class="text-muted">{{$posts->description}}</p></td>
</tr>
</tbody>
@endif
@endforeach
    </table>
    </div>
</div>
{{-- @foreach($comment as $comments)

@endforeach
<h5 class="text-muted">Comments</h5>
<p>
{{$comments->comments}}</p> --}}

@endsection  