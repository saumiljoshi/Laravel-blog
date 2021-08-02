@extends('layouts.app')
@section('title')
@endsection
@section('content')
<div>
    @foreach ($user as $users)
  <ul class="list-group">
    <li class="list-group-item">
        @if( Auth::check() == $users->id)
        {{$users->name}}
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
      @endif
 @endforeach
      