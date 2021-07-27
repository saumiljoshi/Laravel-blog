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
    <form method="POST" action="/update">
      @csrf
      <table class="table table table-striped table">
    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Title</label><br>
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
  <li>
    <a class="nav-link ml-auto" href="/logout">Logout</a>
</li>
      </table>
    </form>
    </body>
</html>
