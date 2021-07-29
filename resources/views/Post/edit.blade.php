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
    <form method="POST" action="{{'/update/posts/'.$data->id}}">
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
      </table>
    </form>
    </body>
</html>
