<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Veiculo</title>
</head>
<body>
    {!! Form::model($plate, ['method' => 'PATCH', 'route' => ['vehicles.update', $plate->id]])!!}
@csrf

{!! Form::label('plate', 'Placa')!!}
{!! Form::text('plate')!!}

{!! Form::submit('Salvar')!!}

{!! Form::close() !!}


    {{--<form action="{{ route('vehicles.update', [ 'plate' => $record->id ])}} " method="post">
        @method('PATCH')
        @csrf
        
        <label for="plate">Placa</label>
        <input type="text" name="plate" id="plate" value="{{$record->name}}">
        
        <button type="submit">Salvar</button>
    </form>--}}

</body>
</html>