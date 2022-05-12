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
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Embarazos</u></b></a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Embarazo: </strong></h2>
                        @if (Auth::user()->tipo_usuario == "Doctor")
                            <a href="" data-target="#modal-eliminar-{{$embarazo->idembarazo}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Embarazo">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.embarazos.modaleliminar')
                        @endif
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistaembarazo','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir embarazo </strong></h4>
                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$embarazo->idembarazo}}">
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
                    <div class="card-body">		
                        
                        
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    @if (Auth::user()->tipo_usuario == "Doctor")
                                        <a href="{{URL::action('EmbarazoController@edit',$embarazo->idembarazo)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Embarazo">
                                                <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                            </span>
                                        </a>
                                        @include('pacientes.historiales.embarazos.modaleliminar')
                                    @endif
                                </div>
                            </div>
                            <?php
                                $fecha = date("d-m-Y", strtotime($embarazo->fecha));
                                $fur = date("d-m-Y", strtotime($embarazo->fur));
                                $fechaParto = date("d-m-Y", strtotime($embarazo->fur));
                                $fechaParto = date("d-m-Y", strtotime($fechaParto.'+ 280 days'));
                            ?>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fecha"><strong>Fecha</strong></label>
                                    <p>{{$fecha}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="paciente"><strong>Paciente</strong></label>
                                    <p>{{$embarazo->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$embarazo->Doctor}} ({{ $embarazo->especialidad }})</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>FUR</strong></label>
                                    <p>{{$fur}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>FPP</strong></label>
                                    @if ($fur != '01-01-1970')
                                    <p>{{$fechaParto}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong><u>Seguimiento</u></strong></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>1er. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30" rows="3">{{ $embarazo->trimestre1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>2do. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30"  rows="3">{{ $embarazo->trimestre2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>3er. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30" rows="3">{{ $embarazo->trimestre3 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong><u>Controles</u></strong></label>
                                </div>
                            </div>
                        </div>
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