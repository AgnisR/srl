@extends('layouts.app')

@section('content')

<h1>{{ $articles->title }}</h1>
<p>{{ $articles->article }}</p>
<p>{{ $articles->created_at->toFormattedDateString() }}</p>

      <hr>
    @guest
    @else
      <h4>Ieraksti komentāru:</h4>
      <form role="form" method="post" action="/comments/a/{{$articles->id}}">
          {{ csrf_field() }}
        <div class="form-group">
            <label for="comment"></label>
          <textarea id="comment" name="comment" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Pievienot</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Komentāri:</p><br>

@foreach($comment as $com)
@if(($com->target_id==$articles->id)and($com->type=='a'))
    <div class="article-thumb">
        
        <p>{{$com->comment}}</p>
        <small>Autors: {{$com->users->name}}</small>
    </div>
@endif
@endforeach

@endguest

@stop