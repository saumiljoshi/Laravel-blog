@extends('layouts.app')
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/home" class="nav-link active" aria-current="page">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/profile" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{$user->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
              <li><a class="dropdown-item" href="/new-post">Add New Post</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="d-flex flex-column justify-content-center mx-auto w-25">
    <h4>your blog posts</h4>
    <a href="/new-post" class="btn btn-info">Add new post</a> 
   @if(!is_null($user) > 0)
  <table class="table table-striped">
      <a class="nav-link ml-auto" href="/logout">Logout</a>
  </li>
  </table>
  @else
  <p>No post created</p>
  @endif
   </div>
</body>  
</html>
