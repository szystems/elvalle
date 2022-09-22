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
                        <a class="nav-link" aria-current="page" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Climaterio / Menopausea</u></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico</a>
                  </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <a href="{{URL::action('ClimaymenoController@show',$climaymeno->idclimaymeno)}}">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Regresar a climaymeno">
                                <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                    <i class="fas fa-reply-all"></i>Regresar a estudio de climaterio y menopausea
                                </button>
                            </span>
                        </a>
                        <h2 class="h3 card-header-title"><strong>Listado de Imagenes: </strong></h2>
                        <br>
                        @if(Auth::user()->tipo_usuario == "Doctor")
                            {!!Form::open(array('url'=>'pacientes/historiales/climaymenos/imagenes','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                            {{Form::token()}}
                            <label for="imagen"><strong>Agregar Imagen</strong></label>
                                    
                            <div class="input-group">
                                <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <br>
                                        <input type="file" name="imagen" value="{{old('imagen')}}">
                                        <input type="hidden" name="idclimaymeno" class="form-control" value="{{$climaymeno->idclimaymeno}}">
                                    </div>
                                </div>
                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción</label>
                                            <textarea name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-info">
                                                    <i class="far fa-plus-square"></i> Agregar Imagen
                                                </button>
                                        </span>
                                    </div>
                            </div>
                            {!!Form::close()!!}
                        @endif
                    </header> 
        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th><h5><STRONG><i class="fa fa-sliders-h"></i></STRONG></th>
                                    <th><h5><STRONG>Fecha</STRONG></th>
                                    <th><h5><STRONG>Descripcion</STRONG></th>
                                    <th><h5><STRONG>Imagen</STRONG></th>
                                    
                                </thead>
                                @foreach ($climaymenoimgs as $imagen)
                                    <tr>
                                        <td>
                                            @if(Auth::user()->tipo_usuario == "Doctor")
                                                <a href="{{URL::action('ClimaymenoImgController@edit',$imagen->idclimaymeno_img)}}">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagen">
                                                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                                <i class="far fa-edit"></i>
                                                        </button>
                                                    </span>
                                                </a>

                                                <a href="" data-target="#modal-eliminar-{{$imagen->idclimaymeno_img}}" data-toggle="modal">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar imagen">
                                                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                <i class="far fa-minus-square"></i>
                                                        </button>
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                        <?php
                                            $fecha = date("d-m-Y", strtotime($imagen->fecha));
                                        ?>
                                        <td align="left"><h5>{{ $fecha}}</h5></td>
                                        <td align="center"><h5>{{ $imagen->descripcion}}</h5></td>
                                        <td align="center">
                                            @if ($imagen->imagen != null)
                                                <img src="{{asset('imagenes/climaymenos/'.$imagen->imagen)}}" alt="" width="250px"  class="img-thumbnail">
                                            @else
                                                "No hay imagen"
                                            @endif
                                        </td>
                                    </tr>
                                    @include('pacientes.historiales.climaymenos.imagenes.modaleliminar')
                                @endforeach
                            </table>
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