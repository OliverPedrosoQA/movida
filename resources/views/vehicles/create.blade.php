<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Veículo</title>
</head>
<body>
    
    {!! Form::open(['route' => 'brands.store']) !!}
        @csrf
        {!!Form::label('plate', 'Placa')!!}
        {!!Form::text('plate')!!}
        {!!Form::submit('Salvar!')!!}
    {!! Form::close() !!}
    
</body>
</html>