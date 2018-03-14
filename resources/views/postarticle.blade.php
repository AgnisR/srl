@extends('layouts.app')

@section('content')
<div>
 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

        <label for="title" class="control-label">Virsraksts</label>

        <div>
            <input id="title" type="text" name="title" required autofocus>
        </div>
    </form>
</div>
@endsection