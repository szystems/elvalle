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
                                    <a class="nav-link active" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Embarazos</u></b> <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Ginecoestética <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
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
                                    <h2 class="h3 card-header-title"><strong>Nuevo Control: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/embarazos/controles', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                    
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idembarazo" value="{{ $embarazo->idembarazo }}">
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
                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Datos de nuevo control de embarazo:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Sintomas</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Sueño</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="sueno" cols="30" rows="2">{{ old('sueno') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Apetito</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="apetito" cols="30" rows="2">{{ old('apetito') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Estreñimiento</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="estrenimiento" cols="30" rows="2">{{ old('estrenimiento') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Disuria</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="disuria" cols="30" rows="2">{{ old('disuria') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nauseas/Vomitos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nauseas_vomitos" cols="30" rows="2">{{ old('nauseas_vomitos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Flujo Vaginal</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="flujo_vaginal" cols="30" rows="2">{{ old('flujo_vaginal') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Dolor</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="dolor" cols="30" rows="2">{{ old('dolor') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="otros" cols="30" rows="2">{{ old('otros') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Examen Fisico</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Peso</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="peso" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('peso') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="talla" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('talla') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="presion_arterial1" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('presion_arterial1') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">mm/</span>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="presion_arterial2" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('presion_arterial2') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/Hg</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('temperatura') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Frecuencia Cardiaca Materna</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="frecuencia_cardiaca_materna" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('frecuencia_cardiaca_materna') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Altura Uterina</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="altura_uterina" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('altura_uterina') }}" placeholder="0" onkeypress="return validardecimal(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                             

                                                                              <tr>
                                                                                    <td><strong>Frecuencia Cardiaca Fetal</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="frecuencia_cardiaca_fetal" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('frecuencia_cardiaca_fetal') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Presentacion Fetal</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="presentacion_fetal" class="form-control">
                                                                                                @if (old('presentacion_fetal'))
                                                                                                      <option value="{{ old('presentacion_fetal') }}" selected>{{ old('presentacion_fetal') }}</option>
                                                                                                      <option value="Cefalica">Cefalica</option>
                                                                                                      <option value="Podalica">Podalica</option>
                                                                                                      <option value="Oblicua">Oblicua</option>
                                                                                                      <option value="Transversa">Transversa</option>
                                                                                                      <option value="No aplica">No aplica</option>
                                                                                                @else
                                                                                                      <option value="Cefalica">Cefalica</option>
                                                                                                      <option value="Podalica">Podalica</option>
                                                                                                      <option value="Oblicua">Oblicua</option>
                                                                                                      <option value="Transversa">Transversa</option>
                                                                                                      <option value="No aplica">No aplica</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Movimientos Fetales</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="movimientos_fetales" class="form-control">
                                                                                                @if (old('movimientos_fetales'))
                                                                                                      <option value="{{ old('movimientos_fetales') }}" selected>{{ old('movimientos_fetales') }}</option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Edema en MI</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="edema_mi" class="form-control">
                                                                                                @if (old('edema_mi'))
                                                                                                      <option value="{{ old('edema_mi') }}" selected>{{ old('edema_mi') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Varices</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="varices" class="form-control">
                                                                                                @if (old('varices'))
                                                                                                      <option value="{{ old('varices') }}" selected>{{ old('varices') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Flujo Vaginal (Ph)</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="flujo_vaginal_ph" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('flujo_vaginal_ph') }}" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">Ph</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Tratamiento</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Medicamentos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="medicamentos" cols="30" rows="2">{{ old('medicamentos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Especiales</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="especiales" cols="30" rows="2">{{ old('especiales') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Proxima Cita</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="proxima_cita" class="form-control datepicker" name="proxima_cita" value="">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nota Adicional</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nota" cols="30" rows="2">{{ old('nota') }}</textarea>
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
