@extends('layouts.app')
@section('title')
@endsection
@section('content')
  <body>
    
  @foreach($category as $categories)
  
  @endforeach
  <div class="d-flex flex-column justify-content-center mx-auto w-25">

      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <form method="POST" action="{{'/update/posts/'.$data->id}}">
            @csrf
            <input type="hidden" name="categories" value="{{$categories->id}}" required/>
            <input type="hidden" name="user_id" value="{{$data->user_id}}" required/>
          <div class="form-group py-3">
            <label>Title</label>
            <input required="required" placeholder="Enter title here" type="text" name="title" class="form-control" value="{{$data->title}}" required />
          </div>
  
            <div class="form-group py-3">
              <label>Description</label>
                <textarea name="description" class="form-control" required>{{$data->description}}</textarea>
              </div>
  
              <div class="py-3">  
                <input type="submit" name="update" class="btn btn-success" value="Update" required />
              </div>
            </form>
            </div>
        </div>
      </div>    
    </body>  
    </html>
@endsection