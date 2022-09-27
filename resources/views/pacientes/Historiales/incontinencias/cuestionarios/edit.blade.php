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
                                  <a class="nav-link"  href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
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
                                  <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica <span class="badge badge-info">{{ $totalSillas }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Incontinencia Urinaria</u></b> <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
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
                                    <h2 class="h3 card-header-title"><strong>Editar Cuestionario: </strong></h2>
                              </header>

                              <div class="card-body">
                                    
                                    {!!Form::model($cuestionario,['method'=>'PATCH','route'=>['cuestionarios.update',$cuestionario->idincontinenciau_cuestionario]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idincontinenciau" value="{{ $incontinencia->idincontinenciau }}">
                                                            <input type="hidden" name="idpaciente" value="{{ $incontinencia->idpaciente }}">
                                                      </div>
                                                </div>
                                                <?php
                                                      $fecha = date("d-m-Y", strtotime($incontinencia->fecha));
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
                                                            <p>{{$incontinencia->Paciente}}</p>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="sexo"><strong>Sexo</strong></label>
                                                            <p>{{$incontinencia->sexo}}</p>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong>Doctor</strong></label>
                                                            <p>{{$incontinencia->Doctor}} ({{ $incontinencia->especialidad }})</p>
                                                      </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Preguntas</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              @php
                                                                                    $fecha = date("d-m-Y", strtotime($cuestionario->fecha));
                                                                              @endphp
                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input readonly type="text" class="form-control datepicker" name="fecha" value="{{ $fecha }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>1. ¿Con que frecuencia pierde orina? </strong></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td align="left">
                                                                                          <select name="frecuencia" class="form-control">
                                                                                                @if ($cuestionario->frecuencia)
                                                                                                      <option value="{{ $cuestionario->frecuencia }}" selected>{{ $cuestionario->frecuencia }}</option>
                                                                                                      <option value="0">Nunca (0 Puntos)</option>
                                                                                                      <option value="1">Una vez a la semana (1 Puntos)</option>
                                                                                                      <option value="2">2-3 veces¬/semana (2 Puntos)</option>
                                                                                                      <option value="3">Una vez al día (3 Puntos)</option>
                                                                                                      <option value="4">Varias veces al día (4 Puntos)</option>
                                                                                                      <option value="5">Continuamente (5 Puntos)</option>
                                                                                                @else
                                                                                                      <option value="0">Nunca (0 Puntos)</option>
                                                                                                      <option value="1">Una vez a la semana (1 Puntos)</option>
                                                                                                      <option value="2">2-3 veces¬/semana (2 Puntos)</option>
                                                                                                      <option value="3">Una vez al día (3 Puntos)</option>
                                                                                                      <option value="4">Varias veces al día (4 Puntos)</option>
                                                                                                      <option value="5">Continuamente (5 Puntos)</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>2. Indique su opinión acera de la cantidad de orina que usted cree que se le escapa, es decir, la cantidad de orina que pierde habitualmente tanto si lleva protección como si no. </strong></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td align="left">
                                                                                          <select name="cantidad" class="form-control">
                                                                                                @if ($cuestionario->cantidad)
                                                                                                      <option value="{{ $cuestionario->cantidad }}" selected>{{ $cuestionario->cantidad }}</option>
                                                                                                      <option value="0">No se escapa nada (0 Puntos)</option>
                                                                                                      <option value="2">Muy poca cantidad (2 Puntos)</option>
                                                                                                      <option value="4">Una cantidad moderada (4 Puntos)</option>
                                                                                                      <option value="6">Mucha cantidad (6 Puntos)</option>
                                                                                                @else
                                                                                                      <option value="0">No se escapa nada (0 Puntos)</option>
                                                                                                      <option value="2">Muy poca cantidad (2 Puntos)</option>
                                                                                                      <option value="4">Una cantidad moderada (4 Puntos)</option>
                                                                                                      <option value="6">Mucha cantidad (6 Puntos)</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>3. ¿En qué medida estos escapes de orina, que tiene, han afectado a su vida diaria? (Nada=0...Mucho=10)</strong></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td align="left">
                                                                                          <select name="medida" class="form-control">
                                                                                                @if ($cuestionario->medida)
                                                                                                      <option value="{{ $cuestionario->medida }}" selected>{{ $cuestionario->medida }}</option>
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">10</option>
                                                                                                @else
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">10</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                </div>

                                                <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                                                    
                                                                        <tbody>

                                                                              <tr>
                                                                                    <td colspan="2"><strong>4. ¿Cuánto pierde de orina? Señale todo lo que le pasa a Ud.</strong></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>- Nunca</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->nunca)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="nunca" value="1" checked>
                                                                                                      <label for="primary-checkbox">(1 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="nunca" value="1">
                                                                                                      <label for="primary-checkbox">(1 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Antes de llegar al servicio</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->antes_servicio)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="antes_servicio" value="2" checked>
                                                                                                      <label for="primary-checkbox">(2 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="antes_servicio" value="2">
                                                                                                      <label for="primary-checkbox">(2 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Al toser o al destornudar</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->toser)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="toser" value="3" checked>
                                                                                                      <label for="primary-checkbox">(3 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="toser" value="3">
                                                                                                      <label for="primary-checkbox">(3 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Mientras duerme</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->duerme)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="duerme" value="4" checked>
                                                                                                      <label for="primary-checkbox">(4 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="duerme" value="4">
                                                                                                      <label for="primary-checkbox">(4 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Al realizar esfuerzos físicos/ejercicio</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->esfuerzos)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="esfuerzos" value="5" checked>
                                                                                                      <label for="primary-checkbox">(5 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="esfuerzos" value="5">
                                                                                                      <label for="primary-checkbox">(5 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Cuanto termina de orinar y ya se ha vestido</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->termina)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="termina" value="6" checked>
                                                                                                      <label for="primary-checkbox">(6 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="termina" value="6">
                                                                                                      <label for="primary-checkbox">(6 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- Sin motivo evidente</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->sinmotivo)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="sinmotivo" value="7" checked>
                                                                                                      <label for="primary-checkbox">(7 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="sinmotivo" value="7">
                                                                                                      <label for="primary-checkbox">(7 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>- De forma continua</strong></td>
                                                                                    <td align="left">
                                                                                          @if ($cuestionario->continua)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="continua" value="8" checked>
                                                                                                      <label for="primary-checkbox">(8 Puntos)</label>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="continua" value="8">
                                                                                                      <label for="primary-checkbox">(8 Puntos)</label>
                                                                                                </div>
                                                                                          @endif
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
