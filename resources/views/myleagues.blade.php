@extends('layouts.app')

@section('content')
    @guest
    <h1>Lai apskatītu savas līgas, nepieciešams ielogoties!</h1>
    @else
    @foreach($league as $lea)
            @if($lea->organizer==auth::user()->id)
            <div id="league-thumb"><a href = "/leagues/{{$lea->id}}">
                <div><img src="images/{{$lea->sim}}-thumb.jpg" alt="Sim-Logo"></div>
                <p>{{$lea->name}}</p></a>
            </div>
            @endif
        @endforeach
    @endguest
@endsection