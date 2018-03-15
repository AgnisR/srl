@extends('layouts.app')

@section('content')

<h1>Create a post</h1>

<form method="post" action="/articles">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Article</label>
    <textarea id="article" name="article" class="form-control" required></textarea>
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection