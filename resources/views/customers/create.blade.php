<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Cliente</title>
</head>
<body>
    
    {!! Form::open(['route' => 'customers.store']) !!}
        @csrf
        {!!Form::label('first_name', 'Nome')!!}
        {!!Form::text('first_name')!!}
        {!!Form::label('last_name', 'Sobrenome')!!}
        {!!Form::text('last_name')!!}
        {!!Form::label('cellphone_number', 'Telefone')!!}
        {!!Form::text('cellphone_number')!!}
        {!!Form::submit('Salvar!')!!}
    {!! Form::close() !!}

</body>
</html>