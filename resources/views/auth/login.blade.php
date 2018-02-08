@extends('layouts.auth')

@section('content')
  <div style="text-align: center;"><h1>Cyber Control</h1></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              
               <div style="text-align: center;"><img src="usuario.png" alt="usuario"></div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6" >
                                <input style="font-size: 18px" type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label class="col-md-4 control-label">Clave</label>

                            <div class="col-md-6" style="font-size: 18px">
                                <input style="font-size: 18px" type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                   
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-left: 85px;">
                                   Aceptar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection