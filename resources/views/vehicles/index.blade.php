<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }}</title>
</head>
<body>
    <ul>
        @forelse ($vehicles as $vehicle)
        <li>{{ $vehicle->plate }}</li>
        @empty
            <p>Nenhum veículo encontrado</p>
        @endforelse
    </ul>
</body>
</html>