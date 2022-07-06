@extends('customers/base')

@section('title', 'Rol de Clientes')

@section('conteudo')
 

<a href="{{ route('customers.create') }}">Cadastrar novo Cliente</a>


<h1>Rol de Clientes</h1>


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
                <td><a href="{{route('customers.show', [ 'customer' => $item->id ]) }}">{{$item->cellphone_number}}</a></td>
                <td><a href="{{route('customers.edit', [ 'customer' => $item->id ]) }}">e</a></td>
                <td>
                    <form action="{{ route('customers.destroy', [ 'customer' => $item->id ])}} " method="post">
                    @method('DELETE')
                    @csrf
                                       
                    <button type="submit">x</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@else
    <p>Nenhum cliente encontrado</p>
@endif

@endsection 