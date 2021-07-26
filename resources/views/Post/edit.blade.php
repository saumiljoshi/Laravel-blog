<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method="POST" action='/update'>
  @csrf
  <body>
    <table class="table table table-striped table">
    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Title</label><br>
    <input required="required" placeholder="Enter title here" class="" type="text" name="title" class="" value="{{$data->title}}" required/>
  </div>
  <div class="form-group">
    <label for="name" class="col-form-label text-md-right">Description</label>
  </div>
    <div>
    <textarea name="description" class="" required>{{$data->description}}
    </textarea></div>
  <div>  
    <button class="btn btn-success" name="update">Update</button>
  </div>
  <li>
    <a class="nav-link ml-auto" href="/logout">Logout</a>
</li>
      </table>
  </body>
</form>