@extends('layouts.app')

@section('content')
    <h3 class="page-title">Clientes</h3>
    
    {!! Form::model($cliente, ['method' => 'PUT', 'route' => ['clientes.update', $cliente->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
           Agregar Dias
        </div>

          <div class="panel-body">
            
            <div class="row">
          <span style='color:red;font-size: 18px'>Dias restantes:<?php echo $cliente->dias_restantes; ?></span>
                <div class="col-xs-12 form-group">
                    {!! Form::label('dias_a_agregar', 'Cantidad de dias a agregar*', ['class' => 'control-label']) !!}
                    {!! Form::number('dias_a_agregar', 1, ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>
                    @if($errors->has('dias_a_agregar'))
                        <p class="help-block">
                            {{ $errors->first('dias_a_agregar') }}
                        </p>
                    @endif
                </div>
            </div>
           
            
        </div>
    </div>

    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-danger" href="{{ route('clientes.index') }}">Cancelar</a>
    {!! Form::close() !!}
@stop

