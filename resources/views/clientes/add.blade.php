@extends('layouts.app')

@section('content')


    {!! Form::model($model, ['url' => route('clientes-save'), 'class'=>'form-vertical']) !!}
        {!! Form::hidden('id') !!}

        <div class="row">
            <div class="col-md-6">{!! Form::cText('nome', 'Nome') !!}</div>
            <div class="col-md-6">{!! Form::cText('email', 'Email') !!}</div>
            <div class="col-md-6">{!! Form::cText('telefone', 'Telefone') !!}</div>
            <div class="col-md-6">{!! Form::cText('cpf', 'CPF') !!}</div>
        </div>

        <div >
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>


   {!! Form::close() !!}

@stop
