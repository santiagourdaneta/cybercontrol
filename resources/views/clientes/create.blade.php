@extends('layouts.app')

@section('content')
    <h3 class="page-title">Clientes</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['clientes.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Registrar
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('username', 'Username*', ['class' => 'control-label']) !!}
                    {!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('username'))
                        <p class="help-block">
                            {{ $errors->first('username') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dias_registrados', 'Dias de Premium*', ['class' => 'control-label']) !!}
                    {!! Form::number('dias_registrados', old('dias_registrados'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dias_registrados'))
                        <p class="help-block">
                            {{ $errors->first('dias_registrados') }}
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

