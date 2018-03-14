@extends('layouts.app')
@section('content')
    
    <div class="saturs" id="saturs">
    @guest
    @else
        <div id="my-leagues"><a href="/myleagues">
            <h3>Manas līgas</h3></a>
        </div>
    @endguest
    @foreach($league as $lea)
        <div id="leagues">
            <div id="league-thumb"><a href = "/leagues/{{$lea->id}}">
                <div><img src="images/{{$lea->sim}}-thumb.jpg" alt="Sim-Logo"></div>
                <p>{{$lea->name}}</p></a>
            </div>
        </div>
    @endforeach
    </div>
@stop

