@extends('layouts.app')

@section('content')

    <div style="text-align: right">
        <a href="{!! route('clientes-add') !!}">Novo Registro</a>
    </div>


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
