@extends('layouts.app')
@section('title')
@endsection
@section('content')
<body>
 
     <div class="d-flex flex-column justify-content-center mx-auto w-25">
        <div class="card" style="width: 30rem;">

            <div class="card-body py-3">
              <form method="POST" action="/comment">
                @csrf 
             
              <p><b><i>{{($posts->title)}}</i></b></p>
              <p><b>{{($posts->description)}}</b></p>
             
              
                 <p class="text-muted">Published on: {{$posts->created_at->format('M d,Y \a\t h:i a')}}</p>
                <h3><i>Add comment here</i></h3>
                 <input type="hidden" name="post_id" value="{{$posts->id}}" required/>

                <input type="hidden" name="user_id" value="{{$posts->user_id}}" required/>
                
                <textarea name="comments" placeholder="comment here" required></textarea><hr/>
                <button class="btn btn-info" name="publish" required>publish</button>
              </form>             
            </div>
        </div>
     </div>
          
  <h3 class="text-muted">Previous Comments</h3>
 @foreach($comments as $comment)

 <p class="text-muted">{{$comment->comments}}</p>

 @endforeach
  
@endsection    
</body>
</html>