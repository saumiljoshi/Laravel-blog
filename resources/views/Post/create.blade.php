<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                <div class="card-body">
                    <form method="POST" action="/new-post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right">Title</label>
                            <input type="text" name="title"  class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required autocomplete="name" autofocus>
                     </div> 
                       <div class="form-group">
                        <label for="description" class="col-form-label text-md-right">description</label>
                       <textarea name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" required autocomplete="description" autofocus></textarea>
                       </div>
                       <div class="form-group"> 
                       <input type="submit" name="publish" value="publish" class="btn btn-success"/> 
                       <li><a href="/logout">Logout</a></li>
                       </div>
                             
                </div>
            </form>
            </div>
       
        </div>
    
    </div>
</div>
</div>
</html>