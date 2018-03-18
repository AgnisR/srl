@extends('layouts.app')

@section('content')

<div>
    @guest
    @else
    @if(auth::user()->role==1)
    <div>
        <a href="/articles/create">
            <h4>Pievienot rakstu</h4>
        </a>
    </div>
    @endif
    @endguest
    @foreach($article as $art)
    <div><a href = "/articles/{{$art->id}}">
    <div class="article-thumb">
        
        <h2>{{$art->title}}</h2>
        <p>{{$art->text}}</p>
    </div>
        </a>
    </div>
    @endforeach
</div>

@endsection