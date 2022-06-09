<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Marca</title>
</head>
<body>
    {!!Form::model($record, ['method'=>'PATCH', 'route'=> ['brands.update', $record->id]])!!}
        @csrf
        {!!Form::label('name', 'Marca')!!}
        {!!Form::text('name', $record->name)!!}
        {!!Form::submit('Salvar!')!!}
    {!! Form::close() !!}
</body>
</html>