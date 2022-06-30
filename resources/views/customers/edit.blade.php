<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Cliente</title>
</head>
<body>
    {!! Form::model($record, ['method' => 'PATCH', 'route' => ['customers.update', $record->id]])!!}
@csrf

{!! Form::label('first_name', 'first_name')!!}
{!! Form::text('first_name')!!}<br>

{!! Form::label('last_name', 'last_name')!!}
{!! Form::text('last_name')!!}<br>

{!! Form::label('phone_number', 'phone_number')!!}
{!! Form::text('phone_number')!!}<br>

{!! Form::submit('Salvar')!!}

{!! Form::close() !!}


    {{--<form action="{{ route('customers.update', [ 'customer' => $record->id ])}} " method="post">
        @method('PATCH')
        @csrf
        
        <label for="name">Cliente</label>
        <input type="text" name="name" id="name" value="{{$record->name}}">
        
        <button type="submit">Salvar</button>
    </form>--}}

</body>
</html>