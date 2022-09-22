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
                        <!--modaleliminar-->
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

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <label for="datos"><strong><u>Datos Generales</u></strong></label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                      <div class="table-responsive">
                                            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                
                                                  <tbody>

                                                        <tr>
                                                              <td><strong>Peso</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                        <input type="text" readonly name="peso" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->peso }}">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Lbs.</span>
                                                                        </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Talla</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="talla" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->talla }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">Cms.</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong>IMC</strong></td>
                                                            @php
                                                                $kilogramos = $colposcopia->peso / 2.2;
                                                                $metros = $colposcopia->talla / 100;
                                                                $imc = ($kilogramos /($metros*$metros))
                                                            @endphp
                                                            <td align="left">
                                                                  <div class="input-group">
                                                                        <input type="text" readonly name="imc" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ number_format($imc,2, '.', ',') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text">IMC</span>
                                                                        </div>
                                                                  </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Perimetro Abdominal</strong></td>
                                                              <td align="left"> 
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="perimetro_abdominal" class="form-control text-right " aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->perimetro_abdominal }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">Cms.</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>
                                                        <tr>
                                                              <td><strong>Presion Arterial</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="presion_arterial" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->presion_arterial }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">mm Hg</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Frecuencia Cardiaca</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="frecuencia_cardiaca" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->frecuencia_cardiaca }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">/min</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Frecuencia Respiratoria</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="frecuencia_respiratoria" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->frecuencia_respiratoria }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">/min</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Temperatura</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->temperatura }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">°C</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Saturacion de Oxigeno</strong></td>
                                                              <td align="left">
                                                                    <div class="input-group">
                                                                          <input type="text" readonly name="saturacion_oxigeno" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->saturacion_oxigeno }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                          <div class="input-group-prepend">
                                                                                <span class="input-group-text">%</span>
                                                                          </div>
                                                                    </div>
                                                              </td>
                                                        </tr>
                                                        
                                                  </tbody>
                                            </table>
                                      </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <label for="datos"><strong><u>Componentes</u></strong></label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <div class="table-responsive">
                                            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                  <thead align="center">
                                                        <th><b><u>Componente</u></b></th>
                                                        <th><b><u>Descripcion</u></b></th>
                                                  </thead>
                                                  <tbody>

                                                        <tr>
                                                              <td><strong>Cabeza y cuello</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="cabeza_cuello" class="form-control">{{ $colposcopia->cabeza_cuello }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Tiroides</strong></td>
                                                              <td align="left">
                                                                    <textarea name="tiroides" class="form-control">{{ $colposcopia->tiroides }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Mamas y axilas</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="mamas_axilas" class="form-control">{{ $colposcopia->mamas_axilas }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Cardiopulmonar</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="cardiopulmonar" class="form-control">{{ $colposcopia->cardiopulmonar }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Abdomen</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="abdomen" class="form-control">{{ $colposcopia->abdomen }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td colspan="2" align="center"><strong><u>Ginecologico</u></strong></td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Genitales externos</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="genitales_externos" class="form-control">{{ $colposcopia->genitales_externos }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Especuloscopia</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="especuloscopia" class="form-control">{{ $colposcopia->especuloscopia }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Tacto bimanual</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="tacto_bimanual" class="form-control">{{ $colposcopia->tacto_bimanual }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td><strong>Miembros inferiores</strong></td>
                                                              <td align="left">
                                                                    <textarea readonly name="miembros_inferiores" class="form-control">{{ $colposcopia->miembros_inferiores }}</textarea>
                                                              </td>
                                                        </tr>
                                                        
                                                  </tbody>
                                            </table>
                                      </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <label for="datos"><strong><u>Concluciones</u></strong></label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <div class="table-responsive">
                                            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                  <tbody>

                                                        <tr>
                                                              <td>
                                                                    <strong>Impresion Clinica</strong>
                                                                    <textarea readonly name="impresion_clinica" class="form-control">{{ $colposcopia->impresion_clinica }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td>
                                                                    <strong>Plan Diagnostico</strong>
                                                                    <textarea readonly name="plan_diagnostico" class="form-control">{{ $colposcopia->plan_diagnostico }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td>
                                                                    <strong>Plan Tratamiento</strong>
                                                                    <textarea readonly name="plan_tratamiento" class="form-control">{{ $colposcopia->plan_tratamiento }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td>
                                                                    <strong>Recomendaciones Generales</strong>
                                                                    <textarea readonly name="recomendaciones_generales" class="form-control">{{ $colposcopia->recomendaciones_generales }}</textarea>
                                                              </td>
                                                        </tr>

                                                        <tr>
                                                              <td>
                                                                    <strong>Recomendaciones Especificas</strong>
                                                                    <textarea readonly name="recomendaciones_especificas" class="form-control">{{ $colposcopia->recomendaciones_especificas }}</textarea>
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