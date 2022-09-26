@extends ('layouts.admin')
@section('contenido')


      <div>
            <div class="card mb-4">
                  <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Historial Paciente: {{ $paciente->nombre }}</strong></h2>
                  </header>

                  @if (count($errors) > 0)
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                              </ul>
                        </div>
                  @endif
                  <!--Mensaje de abono correcto-->
                  <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                              @if (Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                          class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                              @endif
                              {{ session()->forget('alert-' . $msg) }}
                        @endforeach
                  </div> <!-- fin .flash-message -->

                  <div class="card-body">
                        <ul class="nav nav-tabs">
                              <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                    href="{{ URL::action('HistorialController@show', $paciente->idpaciente) }}">Perfil</a>
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
                                    <h2 class="h3 card-header-title"><strong>Editar colposcopia: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($colposcopia,['method'=>'PATCH','route'=>['colposcopias.update',$colposcopia->idcolposcopia],'files'=>'true'])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                      </div>
                                                </div>
                                                @php
                                                      $fecha = date("d-m-Y", strtotime($colposcopia->fecha));
                                                @endphp
                                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                      <div class="form-group">
                                                            <label>Fecha</label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="{{ $fecha }}">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor">Doctor</label>
                                                            <input type="hidden" name="iddoctor" value="{{ $colposcopia->iddoctor }}">
                                                            <input readonly type="text" class="form-control" name="doctor" value="{{ $colposcopia->Doctor }} ({{ $colposcopia->especialidad }})">
                                                      </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="paciente">Paciente</label>
                                                            <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                                                            <input readonly type="text" class="form-control" name="paciente" value="{{ $paciente->nombre }}">
                                                      </div>
                                                </div>
                                                <input type="hidden" name="idusuario" class="form-control" id="idusuario" value="{{ Auth::user()->id }}">
                                                
                                                <input type="hidden" name="idusuario" class="form-control" id="idusuario" value="{{ Auth::user()->id }}">

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="datos"><strong><u>Cuestionario</u></strong></label>
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
                                                                                    <td><strong>¿Vio toda la Unión escamoso-cilíndrica (UEC)?</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="union_escamoso_cilindrica" class="form-control">
                                                                                                <option value="{{ $colposcopia->union_escamoso_cilindrica }}" selected>{{ $colposcopia->union_escamoso_cilindrica }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>En caso negativo, sopese la posibilidad de legrado endocervical:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="legrado_endocervical" class="form-control" >{{ $colposcopia->legrado_endocervical }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Colposcopia insatisfactoria:</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="colposcopia_insatisfactoria" class="form-control">
                                                                                                      <option value="{{ $colposcopia->colposcopia_insatisfactoria }}" selected>{{ $colposcopia->colposcopia_insatisfactoria }}</option>
                                                                                                      <option value="por no haber visto todo la UEC">por no haber visto todo la UEC</option>
                                                                                                      <option value="Por no haber visto toda la lesión">Por no haber visto toda la lesión</option>
                                                                                          </select>
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
                                                                                                      <input type="checkbox" name="hd_eap" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_eap" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Epitelio acetoblanco mícropapilar o cerebroide</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_eam == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_eam" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_eam" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Leucoplasia</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_leucoplasia == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_leucoplasia" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_leucoplasia" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Punteando</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_punteando == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_punteando" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_punteando" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Mosaico</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_mosaico == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_mosaico" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_mosaico" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Vasos atípicos</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_vasos == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_vasos" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_vasos" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Área yodonegativas</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_area == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_area" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_area" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Otros</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hd_otros == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_otros" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hd_otros" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Otros (Especificar)</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="hd_otros_especificar" class="form-control" >{{ $colposcopia->hd_otros_especificar }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hallazgos fuera de la zona de transformación</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="hallazgos_fuera" class="form-control" >{{ $colposcopia->hallazgos_fuera }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Sospecha colposcópica de carcinoma invasor</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="carcinoma_invasor" class="form-control">
                                                                                                      <option value="{{ $colposcopia->carcinoma_invasor }}" selected>{{ $colposcopia->carcinoma_invasor }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros Hallazgos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="otros_hallazgos" class="form-control" >{{ $colposcopia->otros_hallazgos }}</textarea>
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
                                                                                                      <input type="checkbox" name="dcn_insatisfactoria" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="dcn_insatisfactoria" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Especificar:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="dcn_insatisfactoria_especifique" class="form-control" >{{ $colposcopia->dcn_insatisfactoria_especifique }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Hallazgos colposcópicos normales</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->hallazgos_nomales == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hallazgos_nomales" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="hallazgos_nomales" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Infamación o infección (especifique): </strong></td>
                                                                                    <td align="left">
                                                                                          @if ($colposcopia->inflamacion_infeccion == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="inflamacion_infeccion" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="inflamacion_infeccion" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Especificar:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="inflamacion_infeccion_especifique" class="form-control" >{{ $colposcopia->inflamacion_infeccion_especifique }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    <!--cierre formulario abajo de boton guardar-->
                                    
                              </div>

                              <div class="card-footer">
                                    <div class="form-group" id="guardar">
                                          <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                                          <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                                          <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                                    </div>
                                    {!! Form::close() !!}
                              </div>

                        </div>

                  </div>

                  <footer class="card-footer">
                        
                  </footer>
            </div>
      </div>

      <script>
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    
            var optSimple = {
                format: "dd-mm-yyyy",
                language: "es",
                autoclose: true,
                todayHighlight: true,
                todayBtn: "linked",
            };
            $( '#datepicker' ).datepicker( optSimple );
      </script>

      @push ('scripts')
      <script>

            function validardecimal(e,txt) 
            {
                  tecla = (document.all) ? e.keyCode : e.which;
                  if (tecla==8) return true;
                  if (tecla==46 && txt.indexOf('.') != -1) return false;
                  patron = /[\d\.]/;
                  te = String.fromCharCode(tecla);
                  return patron.test(te); 
            } 

            function validarentero(e,txt) 
            {
                  tecla = (document.all) ? e.keyCode : e.which;

                  //Tecla de retroceso para borrar, siempre la permite
                  if (tecla==8)
                  {
                  return true;
                  }
            
                  // Patron de entrada, en este caso solo acepta numeros
                  patron =/[0-9]/;
                  tecla_final = String.fromCharCode(tecla);
                  return patron.test(tecla_final); 
            } 
        
      </script>
      
      @endpush
@endsection
