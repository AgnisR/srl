@extends('layouts.app')

@section('content')
<div>
    <div id="sim-logo">
        <img src="images/{{$sim}}-logo.jpg" alt="Sim-Logo">
    </div>
    <div id="sim-studio">
        
    </div>
    <div id="leagues">
        <h2>leagues</h2>
        @foreach($league as $lea)
            @if($lea->sim==$sim)
            <div id="league-thumb"><a href = "/leagues/{{$lea->id}}">
                <div><img src="images/{{$lea->sim}}-thumb.jpg" alt="Sim-Logo"></div>
                <p>{{$lea->name}}</p></a>
            </div>
            @endif
        @endforeach
    </div>
</div>
@stop
