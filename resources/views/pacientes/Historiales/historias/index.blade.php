@extends ('layouts.admin')
@section ('contenido')


<div>
        <div class="card mb-4">
            <header class="card-header">
                <h2 class="h3 card-header-title"><strong>Historial Paciente: {{$paciente->nombre}}</strong></h2>
            </header>

            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
            @endif
            <!--Mensaje de abono correcto-->
            <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        {{session()->forget('alert-' . $msg)}}
                    @endforeach
            </div> <!-- fin .flash-message -->

            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Historia</u></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fisico</a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Historia: </strong></h2>
                    </header> 
                        
                    <div class="card-body">
                        @if(isset($historia))
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        {{Form::open(array('action' => 'ReportesController@vistahistoria','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                                        {{Form::token()}}		
                                            <div class="card mb-4">
                                                <header class="card-header d-md-flex align-items-center">
                                                    <h4><strong>Imprimir Historia </strong></h4>
                                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$historia->idhistoria}}">
                                                    <input type="hidden" class="form-control datepicker" name="ridpaciente" value="{{$paciente->idpaciente}}">
                                                </header>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                            <div class="form-group mb-2">
                                                                <select name="pdf" class="form-control" value="">
                                                                        <option value="Descargar" selected>Descargar</option>
                                                                        <option value="Navegador">Ver en navegador</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                            <div class="form-group mb-2">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i class="fa fa-file-pdf"></i> PDF
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        {{Form::close()}}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        @if (Auth::user()->tipo_usuario == "Doctor")
                                            <a href="{{URL::action('HistoriaController@edit',$paciente->idpaciente)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Historia">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                                </span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong><u>Informacion General</u></strong></label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong>Paciente</strong></label>
                                        <p>{{$paciente->nombre}}</p>
                                    </div>
                                </div>
                                <?php
                                    $fecha = date("d-m-Y", strtotime($historia->fecha));
                                ?>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="fecha"><strong>Fecha</strong></label>
                                        <p>{{$fecha}}</p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="estado_civil"><strong>Estado Civil</strong></label>
                                        <p>{{$historia->estado_civil}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="procedencia"><strong>Procedencia</strong></label>
                                        <p>{{$historia->procedencia}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="escolaridad"><strong>Escolaridad</strong></label>
                                        <p>{{$historia->escolaridad}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="tel_emergencia"><strong>Telefono de Emergencia</strong></label>
                                        <p>{{$historia->tel_emergencia}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="profesion"><strong>Profesion</strong></label>
                                        <p>{{$historia->profesion}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-124 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="motivo"><strong>Motivo</strong></label>
                                        <p>{{$historia->motivo}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="historia"><strong>Historia</strong></label>
                                        <p>{{$historia->historia}}</p>
                                    </div>
                                </div>

                            </div>
                        @else
                            @if (Auth::user()->tipo_usuario == "Doctor")
                                <a href="historias/create?idpaciente={{$paciente->idpaciente}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Historia ">
                                        <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                            <i class="far fa-plus-square"></i> Crear Historia
                                        </button>
                                    </span>
                                </a>
                            @endif
                        @endif
                    </div>
        
                    <div class="card-footer">

                    </div>
                                
                </div>

            </div>

            <footer class="card-footer">

            </footer>
        </div>
</div>
   
@endsection