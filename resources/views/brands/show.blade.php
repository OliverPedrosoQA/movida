@extends('brands/base')

@section('title', 'Detalhes da marca')

@section('conteudo')

<a href="{{ route('brands.index') }}">Listar Marcas</a>

@isset($record)
    <h2>{{$record->name}}</h2>
@endisset

@endsection
