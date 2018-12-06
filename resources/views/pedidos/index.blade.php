@extends('layouts.app')

@section('content')

    <div style="margin: 20px 50px">

        <div style="text-align: right">
            <a href="{!! route('pedidos-add') !!}">Novo Registro</a>
        </div>


        <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>CPF</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>

            @foreach($pedidos AS $cliente)
                <tr>
                    <td>{!! $cliente->id !!}</td>
                    <td>{!! $cliente->clientes->nome !!}</td>
                    <td>{!! $cliente->clientes->cpf !!}</td>
                    <td>{!! $cliente->data !!}</td>
                    <td>
                        <a href="{!! route('pedidos-edit', ['id' => $cliente->id]) !!}"
                           class="btn btn-info">
                            E
                        </a>
                        <a href="{!! route('pedidos-delete', ['id' => $cliente->id]) !!}"
                           class="btn btn-danger">
                            D
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
@stop
