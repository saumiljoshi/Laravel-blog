@extends('layouts.app')
@section('title')
@endsection
@section('content')
<h2>Categories</h2>
<body>
    
   <table class="table table table-striped table">
   <tr>
   <thead>
       <th><b>Titles</b></th>
       <th><b>description</b></th>
       <th colspan="2">Action</th>
   </thead>
   </tr>
   <tr>
   <tbody>
   @foreach($category as $data)
    
   <td>{{$data->name}}</a></td>
   <td>{{$data->description}}</td>
   <td><a href="/category/{{$data->id}}/edit" class="btn btn-danger">Edit</a></td>
   </tbody>
   @endforeach
   </tr>
   </table>
      <a href="/category/create" class="text-muted">Add Category</a>
   </body>
   
@endsection