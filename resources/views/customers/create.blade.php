<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Cliente</title>
</head>
<body>
    {!! Form::open(['route' => 'customers.store'])!!}
@csrf

{!! Form::label('first_name', 'Nome')!!}
{!! Form::text('first_name')!!}<br>

{!! Form::label('last_name', 'Sobrenome')!!}
{!! Form::text('last_name')!!}<br>

{!! Form::label('phone_number', 'Telefone')!!}
{!! Form::text('phone_number')!!}<br>

{!! Form::submit('Salvar')!!}

{!! Form::close() !!}
    
    {{--<form action="{{ route('customers.store') }}" method="post">

        @csrf
        
        <label for="name">Cliente</label>
        <input type="text" name="name" id="name">
        
        <button type="submit">Salvar</button>
    </form>--}}
</body>
</html>