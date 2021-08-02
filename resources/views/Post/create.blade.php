@extends('layouts.app')
@section('title')
Add new post
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    plugins: ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  });
</script>
<form action="/new-post" method="post">
  @csrf
  <input type="hidden" name="categories" value="1" required />
  <div class="form-group">
    <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name="title" class="form-control" />
  </div>
  <div class="form-group">
    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
  </div>
  <input type="submit" name="publish" class="btn btn-success" value="Publish"/>
  <a href="/home" class="btn btn-success">Back to homepage</a>
</form>
@endsection