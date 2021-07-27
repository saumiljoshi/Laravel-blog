<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div>
        <table class="table table table-striped table">
            <div class="form-group">
                
                
            </div>
    <form method="POST" action="/add">
        @csrf 
        <div>
       <h4>{{$data->description}}</h4>
       <h3>Add comment here</h3>
      <input type="text" name="post" value="{{$data->id}}" required/>
      </div>
      <div>
      <textarea name="comments" placeholder="comment here" required></textarea>
    </div>
    <button class="btn btn-primary" name="publish" required>publish</button>
    <li>
        <a class="nav-link ml-auto" href="/logout">Logout</a>
    </li>
    </form>
</body>
</html>