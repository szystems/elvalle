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
                        <a class="nav-link" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
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
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Radiofrecuencias</u></b></a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                  </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Nueva Radiofrecuencia: </strong></h2>

                        @if(Auth::user()->tipo_usuario == "Doctor")
                        
                        {!!Form::open(array('url'=>'pacientes/historiales/radiofrecuencias','method'=>'POST','autocomplete'=>'off'))!!}
                        {{Form::token()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                    <div class="form-group mb-2">
                                        <span class="input-group-btn"><br>
                                            <button type="submit" class="btn btn-success">
                                                <i class="far fa-plus-square"></i> Crear Radiofrecuencia
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--datos ocultos-->
                        <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                        <input type="hidden" name="iddoctor" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="idusuario" value="{{ Auth::user()->id }}">
                        
                        </h4>
                        {{Form::close()}}
                            
                        @endif
                    </header>
        
                    <div class="card-body">
                        <h2 class="h3 card-header-title"><strong>Listado de Radiofrecuencias: </strong></h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th><h5><i class="fa fa-sliders-h"></i></th>
                                    <th><h5><STRONG>Fecha</STRONG></th>
                                    <th><h5><STRONG>Doctor</STRONG></th>
                                    
                                </thead>
                                @foreach ($radiofrecuencias as $radiofrecuencia)
                                    <tr>
                                        <td>
            
                                            <a href="{{URL::action('RadiofrecuenciaController@show',$radiofrecuencia->idradiofrecuencia)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Radiofrecuencia">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </span>
                                            </a>
                                            @if(Auth::user()->tipo_usuario == "Doctor")
                                                <a href="" data-target="#modal-eliminar-{{$radiofrecuencia->idradiofrecuencia}}" data-toggle="modal">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Radiofrecuencia">
                                                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                <i class="far fa-minus-square"></i>
                                                        </button>
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                        <?php
                                            $fecha = date("d-m-Y", strtotime($radiofrecuencia->fecha));
                                        ?>
                                        <td align="left"><h5>{{ $fecha}}</h5></td>
                                        <td align="center"><h5>{{ $radiofrecuencia->Doctor}}</h5></td>
                                    </tr>
                                    @include('pacientes.historiales.radiofrecuencias.modaleliminar')
                                @endforeach
                            </table>
                        </div>
                        {{$radiofrecuencias->render()}}
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