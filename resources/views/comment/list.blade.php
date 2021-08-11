@extends('layouts.app')
@section('title')
@endsection
@section('content')
<body>
    <div class="d-flex flex-column justify-content-center mx-auto w-25">
      <div class="card" style="width: 30rem;">
         <div class="card-body">
           <h5 class="card-title">All comments are here</h5>
    <form method="POST"> 
  <table class="table table table-striped table"> 
  <tr>
  <th>Posts</th>
   <th>Comments</th>
  </tr>
  @foreach($comment as $data)
  <tbody>
  <tr> 
  <td>{{$data->post_id}}</td>
   <td>{{$data->comments}}<li>{{$data->created_at->format('M d,Y \a\t h:i a')}}<a href="{{'comments/'.$data->id}}">delete comments</a></li></td>
   @endforeach
</tr>
   </tbody>
</table>
</form>
<form method="POST" action="{{'comments/'.$data->id}}">
   @csrf
      </form>
   <a href="/home">Back To Posts</a>
   
</body>
</html>
@endsection