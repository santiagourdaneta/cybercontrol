
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Clientes</h3>

    <p>
        <a href="{{  route('clientes.create') }}" class="btn btn-success">Registrar</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($clientes) > 0 ? 'datatable' : '' }}  ">
                <thead>
                    <tr>
                       
                        <th>Username</th>
                         <th>Dias Premium Restantes</th>
                         <th>Fecha de Registro</th>
                        
                       
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($clientes) > 0)
                        @foreach ($clientes as $cliente)

                            <tr data-entry-id="{{ $cliente->id }}">
                                 
                                <td>{{ $cliente->username }}</td>  
                                <td>{{ $cliente->dias_restantes}}</td>
                                <td>{{ date('d-m-Y H:i:s',strtotime($cliente->created_at)) }}</td>
                                <td><a href="{{ route('clientes.edit',[$id=$cliente->id]) }}" class="btn btn-xs btn-success">Agregar Dias</a>{!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Estas seguro?")."');",
                'route' => ['clientes.destroy', $cliente->id])) !!}
    {!! Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}


</td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div style="color:blue;font-weight: 900">Al pasar de los dias, se iran restando de la cuenta del cliente 1 dia menos.</div>
             <div style="color:blue;font-weight: 900">Al quedarle cinco dias premium a un cliente, se enviara automaticamente un email para alertar sobre este estado.</div>
        </div>
    </div>
@stop

 
