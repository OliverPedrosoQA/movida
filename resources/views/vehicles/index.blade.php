<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

    @if (Route::has('vehicles.create'))
        <a href="{{ route('vehicles.create') }}" >Cadastrar Novo Veiculo</a>
        <br>
    @endif
 <ul>
        @forelse ($vehicles as $vehicle)
        <li>
            <a href="{{ route('vehicles.show', 
            [ 'vehicle' => $vehicle->id ]) }}"
            > {{ $vehicle->plate }}</a>
        </li>
        @empty
            <p>Nenhum veículo encontrado</p>
        @endforelse
    </ul>
</body>
</html>