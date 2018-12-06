@extends('layouts.app')

@section('content')

    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
        </tr>

    @foreach($clientes AS $cliente)
        <tr>
            <td>{!! $cliente->id !!}</td>
            <td>{!! $cliente->nome !!}</td>
            <td>{!! $cliente->telefone !!}</td>
            <td>{!! $cliente->cpf !!}</td>
        </tr>

    @endforeach
    </table>

@stop
