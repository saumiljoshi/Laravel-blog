@extends('layouts.app')
@section('title')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex flex-column justify-content-center mx-auto w-25">
    <div class="card" style="width: 30rem;">
      <h5 class="card-title">Category-section</h5>
      <div class="card-body">
    <form method="POST" action="{{'/update/'.$data->id}}">
        @csrf
        <table class="table table table-striped table">
      <div class="form-group">
        <input type="hidden" name="categories" value="1" required />
          <label for="name" class="col-form-label text-md-right">Name</label><br>
      <input required="required" placeholder="Enter title here" type="text" name="name" class="form-control" value="{{$data->name}}"/>
    </div>
    <div class="form-group">
      <label for="name" class="col-form-label text-md-right">Description</label>
    </div>
      <div>
      <textarea name="description" class="form-control" required>{{$data->description}}
      </textarea></div>
    <div>  
      <input type="submit" name="update" class="btn btn-success" value="Update" required />
    </div>
        </table>
      </form>
      </body>
</html>
@endsection