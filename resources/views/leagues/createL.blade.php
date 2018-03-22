@extends('layouts.app')

@section('content')

<h1>Create a league</h1>

<form method="post" action="/leagues">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
 <div class="form-group">
  <label for="sel1">Select simulator:</label>
  <select class="form-control" id="sim" name="sim" required>
    <option>Live for Speed</option>
    <option>RaceRoom</option>
  </select>
</div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea id="description" name="description" class="form-control" required></textarea>
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection