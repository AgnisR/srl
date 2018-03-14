@extends('layouts.app')

@section('content')
<div id="oneleague">
    <h2>{{$league->name}}</h2>
    <p>{{$league->text}}</p>
    <small>Organizators: {{$league->User->name}}</small>
</div>
@stop