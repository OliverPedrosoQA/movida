@extends('customers/base')

@section('title', 'Detalhes do Cliente')

@section('conteudo')

<a href="{{ route('customers.index') }}">Listar Clientes</a>

@isset($record)
    <h2>{{$record->name}}</h2>
@endisset

@endsection
