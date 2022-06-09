<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Marca</title>
</head>
<body>
    
    {!! Form::open(['route' => 'brands.store']) !!}
        @csrf
        {!!Form::label('name', 'Marca')!!}
        {!!Form::text('name')!!}
        {!!Form::submit('Salvar!')!!}
    {!! Form::close() !!}
</body>
</html>