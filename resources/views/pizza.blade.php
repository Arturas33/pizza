<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
</head>
<body>
{!! Form::open(['url'=>route('pizza')])!!}

{{Form::label('pads_id', 'Pads')}}

{{Form::select('pads_id', $pads)}}
<br/>
{{Form::label('cheeses_id', 'Chees')}}

{{Form::select('cheeses_id', $chees)}}
<br/>
@foreach($ingredients as $key => $ingredient )
{{Form::checkbox('ingredients[]', $key )}}
{{$ingredient }}
    <br/>
@endforeach
<br/>

{{Form::label('contacts', 'iveskit ')}}

{{ Form::textarea('contacts') }}
<br/>
{{Form::submit('Gauti')}}

{!! Form::close() !!}
</body>
</html>