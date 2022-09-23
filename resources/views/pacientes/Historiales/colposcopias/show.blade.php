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
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Colposcopia</u></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico</a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Colposcopia: </strong></h2>
                        
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistacolposcopia','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir Colposcopia </strong></h4>
                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$colposcopia->idcolposcopia}}">
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
                        @if(Auth::user()->tipo_usuario != "Administrador")	
                            <a href="" data-target="#modal-eliminar-{{$colposcopia->idcolposcopia}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar examen colposcopia">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.colposcopias.modaleliminar')
                        
                            <a href="{{URL::action('ColposcopiaController@edit',$colposcopia->idcolposcopia)}}">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar examen colposcopia">
                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </span>
                            </a>

                            <a href="{{URL::action('ColposcopiaImgController@index','searchidcolposcopia='.$colposcopia->idcolposcopia)}}">
                              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                  <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                      <i class="far fa-images"></i> Imagenes
                                  </button>
                              </span>
                            </a>

                        @endif
                        <br><br>
                        <div class="row"><b><u> Cuestionario de Colposcopia</u></b></div>
                        <div class="row">
                            <?php
                                $fecha = date("d-m-Y", strtotime($colposcopia->fecha));
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
                                    <p>{{$colposcopia->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$colposcopia->Doctor}} ({{ $colposcopia->especialidad }})</p>
                                </div>
                            </div>

                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <div class="form-group">
                                          <div class="table-responsive">
                                                <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                      <thead align="center">
                                                            <th><b><u>Pregunta</u></b></th>
                                                            <th><b><u>Respuesta</u></b></th>
                                                      </thead>
                                                      <tbody>

                                                            <tr>
                                                                  <td><strong>¿Vio toda la Unión escamoso-cilíndrica (UEC)?</strong><span>(En caso negativo, sopese la posibilidad de legrado endocervical)</span></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->union_escamoso_cilindrica }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>Colposcopia insatisfactoria:</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->colposcopia_insatisfactoria }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td colspan="2"><strong><u>Hallazgos colposcópicos dentro de la zona de transformación</u></strong></td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Epitelio acetoblanco plano</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_eap == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Epitelio acetoblanco mícropapilar o cerebroide</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_eam == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Leucoplasia</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_leucoplasia == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Punteando</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_punteando == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Mosaico</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_mosaico == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Vasos atípicos</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_vasos == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Área yodonegativas</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_area == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Otros</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hd_otros == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Otros (Especificar)</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->hd_otros_especificar }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>Hallazgos fuera de la zona de transformación</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->hallazgos_fuera }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>Sospecha colposcópica de carcinoma invasor</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->carcinoma_invasor }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>Otros Hallazgos</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->otros_hallazgos }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td colspan="2"><strong><u>Diagnósticos colposcópicos normales</u></strong></td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Colposcopia insatisfactoria (Especifique)</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->dcn_insatisfactoria == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>
                                                            <tr>
                                                                  <td><strong>Especificar:</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->dcn_insatisfactoria_especifique }}
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Hallazgos colposcópicos normales</strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->hallazgos_nomales == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td><strong>- Infamación o infección (especifique): </strong></td>
                                                                  <td align="left">
                                                                        @if ($colposcopia->inflamacion_infeccion == 1)
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" checked disabled>
                                                                              </div>
                                                                        @else
                                                                              <div class="primary-checkbox">
                                                                                    <input type="checkbox" name="hd_eap" disabled>
                                                                              </div>
                                                                        @endif
                                                                  </td>
                                                            </tr>
                                                            <tr>
                                                                  <td><strong>Especificar:</strong></td>
                                                                  <td align="left">
                                                                        {{ $colposcopia->inflamacion_infeccion_especifique }}
                                                                  </td>
                                                            </tr>

                                                            
                                                            
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                              <div class="form-group">
                                    <label for="datos"><strong><u>Imagenes de examen colposcopia({{ $colposcopiaimgs->count() }})</u></strong></label>
                                    @if(Auth::user()->tipo_usuario != "Administrador")
                                    <a href="{{URL::action('ColposcopiaImgController@index','searchidcolposcopia='.$colposcopia->idcolposcopia)}}">
                                          <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                              <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                                  <i class="far fa-images"></i> Imagenes
                                              </button>
                                          </span>
                                    </a>
                                    @endif
                                    <div class="row">
                                          @if ($colposcopiaimgs->count() != null)
                                                <div class="table-responsive">
                                                      <table class="table table-striped table-bordered table-condensed table-hover">
                                                          <thead>
                                                                  <th><h5><STRONG>Imagen</STRONG></th>
                                                                  <th><h5><STRONG>Fecha</STRONG></th>
                                                                  <th><h5><STRONG>Descripcion</STRONG></th>
                                                          </thead>
                                                          @foreach ($colposcopiaimgs as $imagen)
                                                              <tr>
                                                                  <td align="center">
                                                                        @if ($imagen->imagen != null)
                                                                          <div class="thumbnail">
                                                                                <a target="_blank" href="{{asset('imagenes/colposcopias/'.$imagen->imagen)}}" >
                                                                                      <img src="{{asset('imagenes/colposcopias/'.$imagen->imagen)}}" alt="Lights" height="250px">
                                                                                </a>
                                                                          </div>
                                                                        @else
                                                                            "No hay imagen"
                                                                        @endif
                                                                    </td>
                                                                  <?php
                                                                      $fecha = date("d-m-Y", strtotime($imagen->fecha));
                                                                  ?>
                                                                  <td align="center"><h5>{{ $fecha}}</h5></td>
                                                                  <td align="center"><h5>{{ $imagen->descripcion}}</h5></td>
                                                                  
                                                              </tr>
                                                          @endforeach
                                                      </table>
                                                </div>
                                          @else
                                                <h3>Aun no se han insertado imagenes.</h3>
                                          @endif
                                          
                                    </div>
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