@extends('layouts.app')

@section('content')

    <div style="margin: 20px 50px">

        <div style="text-align: right">
            <a href="{!! route('clientes-add') !!}">Novo Registro</a>
        </div>


        <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Pedidos</th>
                <th>Ações</th>
            </tr>

            @foreach($clientes AS $cliente)
                <tr>
                    <td>{!! $cliente->id !!}</td>
                    <td>{!! $cliente->nome !!}</td>
                    <td>{!! $cliente->telefone !!}</td>
                    <td>{!! $cliente->cpf !!}</td>
                    <td>
                        @foreach($cliente->pedidos AS $pedido)
                            {!! $pedido->id !!} > {!! $pedido->data !!}<br />
                        @endforeach
                    </td>
                    <td>
                        <a href="{!! route('clientes-edit', ['id' => $cliente->id]) !!}"
                           class="btn btn-info">
                            E
                        </a>
                        <a href="{!! route('clientes-delete', ['id' => $cliente->id]) !!}"
                           class="btn btn-danger">
                            D
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
@stop
