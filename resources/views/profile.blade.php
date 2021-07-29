<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex flex-column justify-content-center mx-auto w-50">
        <form class="">
 <table class="table table table-striped table">
 <tr>
  <h1 class="text-muted"><center>User-Profile</center></h1>   
</tr>
@foreach($user as $users)
<tr>
    <td><h3 class="text-muted">{{$users->name}}</h3>
    <li class="text-muted">{{$users->email}}</li>
    <li class="text-muted">{{$users->phone_no}}</li></td>
</tr>
@endforeach
</table>
</form>
<li><a href="/index">back to home</a></li>
</body>
</html>