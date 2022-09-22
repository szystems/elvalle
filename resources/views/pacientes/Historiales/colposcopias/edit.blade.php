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
                                    <h2 class="h3 card-header-title"><strong>Crear examen colposcopia: </strong></h2>
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
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="motivo_consulta">Motivo de Consulta</label>
                                                            <textarea name="motivo_consulta" class="form-control" id="" cols="30" rows="5" required>{{ $colposcopia->motivo_consulta }}</textarea>
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
                                                                                                <input type="text" name="peso" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->peso }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="talla" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->talla }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">Cms.</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Perimetro Abdominal</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="perimetro_abdominal" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->perimetro_abdominal }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="presion_arterial" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->presion_arterial }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="frecuencia_cardiaca" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->frecuencia_cardiaca }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="frecuencia_respiratoria" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->frecuencia_respiratoria }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->temperatura }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="saturacion_oxigeno" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $colposcopia->saturacion_oxigeno }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                          <textarea name="cabeza_cuello" class="form-control">{{ $colposcopia->cabeza_cuello }}</textarea>
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
                                                                                          <textarea name="mamas_axilas" class="form-control">{{ $colposcopia->mamas_axilas }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cardiopulmonar</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="cardiopulmonar" class="form-control">{{ $colposcopia->cardiopulmonar }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Abdomen</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="abdomen" class="form-control">{{ $colposcopia->abdomen }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2" align="center"><strong><u>Ginecologico</u></strong></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Genitales externos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="genitales_externos" class="form-control">{{ $colposcopia->genitales_externos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Especuloscopia</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="especuloscopia" class="form-control">{{ $colposcopia->especuloscopia }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tacto bimanual</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="tacto_bimanual" class="form-control">{{ $colposcopia->tacto_bimanual }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Miembros inferiores</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="miembros_inferiores" class="form-control">{{ $colposcopia->miembros_inferiores }}</textarea>
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
                                                                                          <textarea name="impresion_clinica" class="form-control" required>{{ $colposcopia->impresion_clinica }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td>
                                                                                          <strong>Plan Diagnostico</strong>
                                                                                          <textarea name="plan_diagnostico" class="form-control" required>{{ $colposcopia->plan_diagnostico }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td>
                                                                                          <strong>Plan Tratamiento</strong>
                                                                                          <textarea name="plan_tratamiento" class="form-control" required>{{ $colposcopia->plan_tratamiento }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td>
                                                                                          <strong>Recomendaciones Generales</strong>
                                                                                          <textarea name="recomendaciones_generales" class="form-control" required>{{ $colposcopia->recomendaciones_generales }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td>
                                                                                          <strong>Recomendaciones Especificas</strong>
                                                                                          <textarea name="recomendaciones_especificas" class="form-control" required>{{ $colposcopia->recomendaciones_especificas }}</textarea>
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
