@extends('layouts.app')

@section('content')

    <div style="margin: 20px 50px">

    {!! Form::model($model, ['url' => route('pedidos-save'), 'class'=>'form-vertical']) !!}
        {!! Form::hidden('id') !!}

        <div class="row">
            <div class="col-md-6">{!! Form::cText('cliente', 'Cliente') !!}</div>
            <div class="col-md-6">{!! Form::cText('data', 'Data') !!}</div>
        </div>

        <div >
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>


   {!! Form::close() !!}
    </div>

@stop
