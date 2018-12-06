@extends('layouts.app')

@section('content')

    <table>
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
