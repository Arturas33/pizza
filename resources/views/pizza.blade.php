<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
</head>
<body>

{{Form::label('cheeses_id', 'Chees')}}

{{Form::select('cheeses_id', $chees)}}


{{Form::label('Ingredients_id', 'Ingredients')}}

{{Form::select('ingredients_id', $ingredients)}}


{{Form::label('psd_id', 'Pad')}}

{{Form::select('pad_id', $pads)}}


</body>
</html>