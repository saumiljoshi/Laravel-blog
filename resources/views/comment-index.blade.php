<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex flex-column justify-content-center mx-auto w-25">
  <h3>All comments are placed here</h3>
  <form method="post" action=""> 
  <table class="table table table-striped table"> 
  <tr>
  <th>Posts</th>
   <th>Comments</th>
  </tr>
  @foreach($comment as $comments)
  <tbody>
  <tr> 
  <td>{{$comments->post}}</td>
   <td>{{$comments->comments}}<li>{{$comments->created_at->format('M d,Y \a\t h:i a')}}</li></td>
   @endforeach
   
</tr>
   </tbody>
</table>
</form>
   <a href="/show">Back To Posts</a>
</body>
</html>