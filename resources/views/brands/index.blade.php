@extends('brands/base')

@section('title', 'Lista de Marcas')

@section('conteudo')
 

<a href="{{ route('brands.create') }}">Cadastrar nova Marca</a>


<h1>Lista de Marcas</h1>


@if ( isset($collection) && !empty($collection) )
    <table>
        <thead>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            @foreach ($collection as $item)
            
            <tr>
                <td><a href="{{route('brands.show', [ 'brand' => $item->id ]) }}">{{$item->name}}</a></td>
                <td><a href="{{route('brands.edit', [ 'brand' => $item->id ]) }}">e</a></td>
                <td>
                    
                    {!!Form::open( ['method'=>'DELETE', 'route'=> ['brands.destroy', $item->id]])!!}
                        @csrf
                        {!!Form::submit('X')!!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@else
    <p>Nenhuma marca encontrada</p>
@endif

@endsection 