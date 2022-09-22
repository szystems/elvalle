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
                                    <a class="nav-link active" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Radiofrecuencias</u></b></a>
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
                                    <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico</a>
                              </li>
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Editar sesion: </strong></h2>
                              </header>

                              <div class="card-body">
                                    <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                          <div class="form-group">
                                              <label for=""><strong><u>Antecedentes Obstetricos</u></strong></label>
                                          </div>
                                          <div class="table-responsive">
                                              <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                  
                                                  <tbody>
                                                      <tr>
                                                          
                                                          <td><strong>Gestas</strong></td>
                                                          <td align="center">{{ $historia->gestas }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Vias de resolucion</strong></td>
                                                          <td align="center">{{ $historia->vias_resolucion }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Hijos Vivos</strong></td>
                                                          <td align="center">{{ $historia->hijos_vivos }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Hijos Muertos</strong></td>
                                                          <td align="center">{{ $historia->hijos_muertos }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Complicaciones Neonatales</strong></td>
                                                          <td align="center">{{ $historia->complicaciones_neonatales }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Complicaciones Obstetricos</strong></td>
                                                          <td align="center">{{ $historia->complicaciones_obstetricos }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>Abortos</strong></td>
                                                          <td align="center">{{ $historia->abortos }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td><strong>causa</strong></td>
                                                          <td align="center">{{ $historia->causa }}</td>
                                                      </tr>
                                                      
                                                  </tbody>
                                              </table>
                                          </div>
                                    </div>-->
                                    {!!Form::model($sesion,['method'=>'PATCH','route'=>['sesiones.update',$sesion->idradiofrecuencia_sesion]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idradiofrecuencia" value="{{ $radiofrecuencia->idradiofrecuencia }}">
                                                      </div>
                                                </div>
                                                <?php
                                                      $fecha = date("d-m-Y", strtotime($radiofrecuencia->fecha));
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
                                                            <p>{{$radiofrecuencia->Paciente}}</p>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong>Doctor</strong></label>
                                                            <p>{{$radiofrecuencia->Doctor}} ({{ $radiofrecuencia->especialidad }})</p>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Editar datos de sesion de radiofrecuencia:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              @php
                                                                                    $fechaSesion = date("d-m-Y", strtotime($sesion->fecha));
                                                                              @endphp
                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="{{ $fechaSesion }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <!--Monopolar-->
                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Monopolar</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Áreas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="monopolar_areas" cols="30" rows="2">{{ $sesion->monopolar_areas }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="monopolar_indicacion" cols="30" rows="2">{{ $sesion->monopolar_indicacion }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="monopolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $sesion->monopolar_temperatura }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="monopolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $sesion->monopolar_tiempo }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Zonas tratadas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="monopolar_zonas_tratadas" class="form-control" value="{{ $sesion->monopolar_zonas_tratadas }}" placeholder="">
                                                                                                
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <!--Fin Monopolar-->
                                                                             
                                                                              <!--Bipolar-->
                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Bipolar</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Áreas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="bipolar_areas" cols="30" rows="2">{{ $sesion->bipolar_areas }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="bipolar_indicacion" cols="30" rows="2">{{ $sesion->bipolar_indicacion }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="bipolar_temperatura" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->bipolar_temperatura }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="bipolar_tiempo" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->bipolar_tiempo }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Zonas tratadas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="bipolar_zonas_tratadas" class="form-control" value="{{ $sesion->bipolar_zonas_tratadas }}" placeholder="">
                                                                                                
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <!--Fin Bipolar-->
                                                                              
                                                                              <!--Tetrapolar-->
                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Tetrapolar</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Áreas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="tetrapolar_areas" cols="30" rows="2">{{ $sesion->tetrapolar_areas }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="tetrapolar_indicacion" cols="30" rows="2">{{ $sesion->tetrapolar_indicacion }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="tetrapolar_temperatura" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->tetrapolar_temperatura }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="tetrapolar_tiempo" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->tetrapolar_tiempo }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Zonas tratadas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="tetrapolar_zonas_tratadas" class="form-control" value="{{ $sesion->tetrapolar_zonas_tratadas }}" placeholder="">
                                                                                                
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <!--Fin Tetrapolar-->

                                                                              <!--Hexapolar-->
                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Hexapolar</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Áreas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="hexapolar_areas" cols="30" rows="2">{{ $sesion->hexapolar_areas }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="hexapolar_indicacion" cols="30" rows="2">{{ $sesion->hexapolar_indicacion }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="hexapolar_temperatura" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->hexapolar_temperatura }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="hexapolar_tiempo" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->hexapolar_tiempo }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Zonas tratadas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="hexapolar_zonas_tratadas" class="form-control" value="{{ $sesion->hexapolar_zonas_tratadas }}" placeholder="">
                                                                                                
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <!--Fin Hexapolar-->

                                                                              <!--Ginecológico-->
                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Ginecológico</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Áreas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="ginecologico_areas" cols="30" rows="2">{{ $sesion->ginecologico_areas }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="ginecologico_indicacion" cols="30" rows="2">{{ $sesion->ginecologico_indicacion }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="ginecologico_temperatura" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->ginecologico_temperatura }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="ginecologico_tiempo" class="form-control text-right"  aria-label="Amount (to the nearest dollar)" value="{{ $sesion->ginecologico_tiempo }}" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Zonas tratadas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="ginecologico_zonas_tratadas" class="form-control" value="{{ $sesion->ginecologico_zonas_tratadas }}" placeholder="">
                                                                                                
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <!--Fin Ginecológico-->
                                                                              
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
            $( '#proxima_cita' ).datepicker( optSimple );
    
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
