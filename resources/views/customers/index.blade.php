@extends('brands/base')

@section('title', 'Lista de Marcas')

@section('conteudo')
 

<a href="{{ route('brands.create') }}">Cadastrar nova Marca</a>


<h1>Lista de Marcas</h1>


@if ( isset($collection) && !empty($collection) )
    <table>
        <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            @foreach ($collection as $item)
            
            <tr>
                <td><a href="{{route('customers.show', [ 'customer' => $item->id ]) }}">{{$item->first_name}}</a></td>
                <td><a href="{{route('customers.show', [ 'customer' => $item->id ]) }}">{{$item->last_name}}</a></td>
                <td><a href="{{route('customers.edit', [ 'customer' => $item->id ]) }}">e</a></td>
                <td>
                    
                    {!!Form::open( ['method'=>'DELETE', 'route'=> ['customers.destroy', $item->id]])!!}
                        @csrf
                        {!!Form::submit('X')!!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@else
    <p>Nenhum cliente encontrado</p>
@endif

@endsection 