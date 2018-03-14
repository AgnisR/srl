    {{Form::open(['url' => '/'])}}
<div>
{{Form::label('title', 'Title:')}}
{{Form::text('title')}}
</div>
    
    {{Form::close()}}