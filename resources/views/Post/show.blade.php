<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
        <a class="nav-link" href="/new-post">Add new post</a>
      </li>
      </ul>
       </div>
</nav>  
<table class="table table table-striped table">
<tr>
<thead>
    <th><b>User</b></th>
    <th><b>Titles</b></th>
    <th><b>description</b></th>
    <th colspan="2">Action</th>
</thead>
</tr>
<tr>
<tbody>
@foreach($post as $data)
<td>{{$data->user_id}}</td>
<td><a href={{'comment/create/'.$data->id}}>{{$data->title}}</a></td>
<td>{{$data->description}}</td>
<td><a href="/posts/edit/{{$data->id}}" class="btn btn-danger">Edit</a></td>
<td>
<form action="/posts/delete/{{ $data->id }}" method="post" class="pull-right">
  @csrf
  <td><a href="/posts/delete/{{$data->id}}" class="btn btn-success">delete</button>  
  </td>
</tbody>
@endforeach
</tr>
</table>
<li>
    <a class="nav-link ml-auto" href="/logout">Logout</a>
</li>

