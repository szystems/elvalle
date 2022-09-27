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
                              @php
                                  $totalRecetas=DB::table('receta')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalFisicos=DB::table('fisico')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalEmbarazos=DB::table('embarazo')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalRadiofrecuencias=DB::table('radiofrecuencia')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalSillas=DB::table('sillae_ciclo')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalClimaymenos=DB::table('climaymeno')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalIncontinencias=DB::table('incontinenciau')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalColposcopias=DB::table('colposcopia')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
          
                                  $totalUltrasonidos=DB::table('ultrasonido_obstetrico')
                                  ->where('idpaciente','=',$paciente->idpaciente) 
                                  ->count();
                              @endphp
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas <span class="badge badge-info">{{ $totalRecetas }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico <span class="badge badge-info">{{ $totalFisicos }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link active" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Radiofrecuencias</u></b> <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica <span class="badge badge-info">{{ $totalSillas }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia <span class="badge badge-info">{{ $totalColposcopias }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                              </li>
                          </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Nueva Sesion: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/radiofrecuencias/sesiones', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                    
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idradiofrecuencia" value="{{ $radiofrecuencia->idradiofrecuencia }}">
                                                            <input type="hidden" name="idpaciente" value="{{ $radiofrecuencia->idpaciente }}">
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
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Datos de nueva sesion de radiofrecuencia:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>

                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="">
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
                                                                                                <textarea class="form-control" name="monopolar_areas" cols="30" rows="2">{{ old('monopolar_areas') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="monopolar_indicacion" cols="30" rows="2">{{ old('monopolar_indicacion') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                @if(old('monopolar_temperatura') != null)
                                                                                                      <input type="text" name="monopolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('monopolar_temperatura') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="monopolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                @if(old('monopolar_tiempo') != null)
                                                                                                      <input type="text" name="monopolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('monopolar_tiempo') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="monopolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                <input type="text" name="monopolar_zonas_tratadas" class="form-control" value="{{ old('monopolar_zonas_tratadas') }}" placeholder="">
                                                                                                
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
                                                                                                <textarea class="form-control" name="bipolar_areas" cols="30" rows="2">{{ old('bipolar_areas') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="bipolar_indicacion" cols="30" rows="2">{{ old('bipolar_indicacion') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                @if(old('bipolar_temperatura') != null)
                                                                                                      <input type="text" name="bipolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('bipolar_temperatura') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="bipolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                @if(old('bipolar_tiempo') != null)
                                                                                                      <input type="text" name="bipolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('bipolar_tiempo') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="bipolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                <input type="text" name="bipolar_zonas_tratadas" class="form-control" value="{{ old('bipolar_zonas_tratadas') }}" placeholder="">
                                                                                                
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
                                                                                                <textarea class="form-control" name="tetrapolar_areas" cols="30" rows="2">{{ old('tetrapolar_areas') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="tetrapolar_indicacion" cols="30" rows="2">{{ old('tetrapolar_indicacion') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                @if(old('tetrapolar_temperatura') != null)
                                                                                                      <input type="text" name="tetrapolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('tetrapolar_temperatura') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="tetrapolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                @if(old('tetrapolar_tiempo') != null)
                                                                                                      <input type="text" name="tetrapolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('tetrapolar_tiempo') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="tetrapolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                <input type="text" name="tetrapolar_zonas_tratadas" class="form-control" value="{{ old('tetrapolar_zonas_tratadas') }}" placeholder="">
                                                                                                
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
                                                                                                <textarea class="form-control" name="hexapolar_areas" cols="30" rows="2">{{ old('hexapolar_areas') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="hexapolar_indicacion" cols="30" rows="2">{{ old('hexapolar_indicacion') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                @if(old('hexapolar_temperatura') != null)
                                                                                                      <input type="text" name="hexapolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('hexapolar_temperatura') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="hexapolar_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                @if(old('hexapolar_tiempo') != null)
                                                                                                      <input type="text" name="hexapolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('hexapolar_tiempo') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="hexapolar_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                <input type="text" name="hexapolar_zonas_tratadas" class="form-control" value="{{ old('hexapolar_zonas_tratadas') }}" placeholder="">
                                                                                                
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
                                                                                                <textarea class="form-control" name="ginecologico_areas" cols="30" rows="2">{{ old('ginecologico_areas') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Indicación</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <textarea class="form-control" name="ginecologico_indicacion" cols="30" rows="2">{{ old('ginecologico_indicacion') }}</textarea>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                @if(old('ginecologico_temperatura') != null)
                                                                                                      <input type="text" name="ginecologico_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('ginecologico_temperatura') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="ginecologico_temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                @if(old('ginecologico_tiempo') != null)
                                                                                                      <input type="text" name="ginecologico_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)"  value="{{ old('ginecologico_tiempo') }}"   onkeypress="return validarentero(event,this.value)">
                                                                                                @else
                                                                                                <input type="text" name="ginecologico_tiempo" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validarentero(event,this.value)">
                                                                                                @endif
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
                                                                                                <input type="text" name="ginecologico_zonas_tratadas" class="form-control" value="{{ old('ginecologico_zonas_tratadas') }}" placeholder="">
                                                                                                
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
    
            $( '#datepicker' ).datepicker( 'setDate', today );
            $( '#proxima_cita' ).datepicker( 'setDate', today );
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
