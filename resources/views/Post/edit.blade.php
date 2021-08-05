@extends('layouts.app')
@section('title')
@endsection
@section('content')
  <body>
    <form method="POST" action="{{'/update/posts/'.$data->id}}">
      @csrf
      <table class="table table table-striped table">
    <div class="form-group">
      @foreach($category as $categories)

      @endforeach 
      <input type="hidden" name="categories" value="{{$categories->id}}" required/>
        <label for="name" class="col-form-label text-md-right">Title</label><br>
        <input type="hidden" name="user_id" value="{{$data->user_id}}" required/>
    <input required="required" placeholder="Enter title here" type="text" name="title" class="" value="{{$data->title}}" required/>
  </div>
  <div class="form-group">
    <label for="name" class="col-form-label text-md-right">Description</label>
  </div>
    <div>
    <textarea name="description" class="" required>{{$data->description}}
    </textarea></div>
  <div>  
    <input type="submit" name="update" class="btn btn-success" value="Update" required />
  </div>
      </table>
      
    </form>
    </body>
</html>
@endsection