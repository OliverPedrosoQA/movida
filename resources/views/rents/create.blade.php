<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realizar Aluguel</title>
</head>
<body>
    {!! Form::open(['route' => 'rents.store'])!!}
@csrf

{!! Form::label('vehicle', 'Veiculo')!!}
{!! Form::text('vehicle')!!}<br>

{!! Form::label('customer_first_name', 'Nome Cliente')!!}
{!! Form::text('customer_first_name')!!}<br>

{!! Form::label('customer_last_name', 'Sobrenome Cliente')!!}
{!! Form::text('customer_last_name')!!}<br>

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