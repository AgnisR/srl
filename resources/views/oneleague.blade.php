@extends('layouts.app')

@section('content')
<div id="oneleague">
    <h2>{{$league->name}}</h2>
    <p>{{$league->description}}</p>
    <small>Organizators: {{$league->User->name}}</small>
</div>
@stop