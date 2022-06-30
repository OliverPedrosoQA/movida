<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <label>{{$vehicle->id}}</label>
    <label>{{$vehicle->plate}}</label>
    @if (Route::has('vehicles.index'))
        <a href="{{ route('vehicles.index') }}" >Listar Veiculos</a>
    @endif
</body>
</html>