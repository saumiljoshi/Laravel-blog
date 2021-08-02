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
    <form method="POST" action="/add/user">
        @csrf 
        <div class="d-flex flex-column justify-content-center mx-auto w-25">
       <h4>{{$data->description}}</h4>
       <li>{{$data->created_at->format('M d,Y \a\t h:i a')}}</li>
       <h3>Add comment here</h3>
      <input type="hidden" name="post" value="{{$data->id}}" required/>
      <input type="hidden" name="user" value="{{$data->id}}" required/>
      <textarea name="comments" placeholder="comment here" required></textarea>
   <button class="btn btn-primary" name="publish" required>publish</button>
</div>
<a href="/logout">Logout</a>
    </form>
    
</body>
</html>