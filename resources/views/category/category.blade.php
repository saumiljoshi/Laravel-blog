@extends('layouts.app')
@section('title')
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h3>Category Add here</h3>
<form method="post" action="/add/category">
    @csrf
   <div class="form-group">
     
   <input type="text" name="name" class="col-form-label text-md-right" placeholder="category-type" required="required"/>
   
   <input type="text" name="description" class="col-form-label text-md-right" placeholder="add description here" required="required"/>
   </div>
   <div>
   <input type="submit" name="Add category" class="btn btn-info" value="Add Category" required="required"/>
</div>
</form>
@endsection