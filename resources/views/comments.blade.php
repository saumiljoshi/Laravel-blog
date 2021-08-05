@extends('layouts.app')
@section('title')
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>
        <table class="table table table-striped table">
            <div class="form-group">    
            </div>
    @foreach($comment as $comments)
    
    @endforeach
    @foreach($data as $datas)
    @endforeach
    <div class="d-flex flex-column justify-content-center mx-auto w-25">
    <div class="card" style="width: 25rem;">
      <div class="card-body">
         <form method="POST" action="/add/comments">
        @csrf            
           <p>{{$datas->title}}</p>
           <p>{{$datas->description}}</p>
           <h3>Add comment here</h3>
      <input type="hidden" name="post" value="{{$datas->id}}" required/>
      <input type="hidden" name="user" value="{{$datas->id}}" required/>
      <textarea name="comments" placeholder="comment here" required></textarea><hr/>
   <button class="btn btn-info" name="publish" required>publish</button>
  
</div>
    </div>
    </div>
  <h3 class="text-muted">Previous Comment</h3>
  <p class="text-success">{{$comments->comments}}</p>
<a href="/comment-index" class="text-muted">All Comments</a>
</form>
@endsection    
</body>
</html>