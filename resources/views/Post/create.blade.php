@extends('layouts.app')
@section('title')
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="d-flex flex-column justify-content-center mx-auto w-25">
    <div class="card" style="width: 30rem;">
      <div class="card-body ">
        <h5 class="card-title">Add New Post</h5>
          <form action="/new-post" method="POST" class="table table table-striped table py-3">
            @csrf
              <select class="custom-select" name="categories_id">
                @foreach($categories as $category)
                  <option name="categories_id" value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
              </select>
              <div class="form-group py-3">

                @foreach($users as $user)
                <input type="hidden" class="form-control" name="user_id" value="{{$user->id}}" required="required"/>
                @endforeach
                <input required="required" placeholder="Enter title here" type="text" name="title" class="form-control" />
              </div>
              <div class="form-group py-3">
                <textarea name="description" class="form-control" placeholder="Post Description here"></textarea>
              </div>
              <div class="py-3">
                <input type="submit" name="publish" class="btn btn-success" value="Publish"/>
              </div>
          </form>
      </div>
    </div>
</div>
@endsection