@extends('layouts.app')
@section('title')
@endsection

@section('content')

<h3 class='text-center'>All Users Information</h3>
<div class="d-flex justify-content-center mx-auto w-auto">
    <table class="table table table-striped table">
    <tr class="text-center">
        <th>User:</th>
        <th>User-Posts:</th>
        <th>Categories:</th>
    </tr>                 
@foreach($post as $posts)
{{-- <div class="list-group-item"><p>{{$posts->title}}</p></div> --}}
     <tr class="text-center">
        <td>{{$posts->user_id}}</td>
        <td>{{$posts->title}}<p class="text-muted">{{$posts->description}}</p></td>
        <td>{{$posts->categories_id}}</td>
  </tr>
  @endforeach
</table>
</div>
@endsection