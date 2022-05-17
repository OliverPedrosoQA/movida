<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Marca</title>
</head>
<body>
    
    <form action="{{ route('brands.update', [ 'brand' => $record->id ])}} " method="post">
        @method('PATCH')
        @csrf
        
        <label for="name">Marca</label>
        <input type="text" name="name" id="name" value="{{$record->name}}">
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>