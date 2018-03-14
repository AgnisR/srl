@extends('layouts.app')

@section('content')

<div>
    @foreach($article as $art)
    <div><a href = "/article/{{$art->id}}">
    <div class="article-thumb">
        
        <h2>{{$art->title}}</h2>
        <p>{{$art->text}}</p>
    </div>
        </a>
    </div>
    @endforeach
</div>

@endsection