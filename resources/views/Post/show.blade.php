
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
 <ul>
    <li class="nav-item">
      <a class="nav-link" href="/new-post">Add new post</a>
      </li>     
    </ul>
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
<td><a href="{{'/comment/posts/'.$data->id}}">{{$data->title}}</a></td>
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
    <a class="nav-link ml-auto" href="/logout">Logout</a>
</body>
