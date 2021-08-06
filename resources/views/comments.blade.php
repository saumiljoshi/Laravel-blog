@extends('layouts.app')
@section('title')
@endsection
@section('content')
<body>
     <div class="d-flex flex-column justify-content-center mx-auto w-25">
        <div class="card" style="width: 30rem;">
         
            <div class="card-body py-3">
              <form method="POST" action="/add/comments">
                @csrf 
                <p>{{$post->title}}</p>           
                <p>{{$post->description}}</p>
           
                <h3>Add comment here</h3>
                <input type="hidden" name="post" value="{{$post->id}}" required/>
                <input type="hidden" name="user" value="{{$post->id}}" required/>      
                <textarea name="comments" placeholder="comment here" required></textarea><hr/>
                <button class="btn btn-info" name="publish" required>publish</button>
              </form>             
            </div>
        </div>
    </div>    
    @foreach($comment as $comments)
    
    @endforeach
   
  <h3 class="text-muted">Previous Comment</h3>
  <p class="text-success">{{$comments->comments}}</p>
    <a href="/comment-index" class="text-muted">All Comments</a>

@endsection    
</body>
</html>