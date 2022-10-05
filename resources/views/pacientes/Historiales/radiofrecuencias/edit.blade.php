@extends ('layouts.admin')
@section('contenido')


      <div>
            <div class="card mb-4">
                  <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Ginecoestética Paciente: {{ $paciente->nombre }}</strong></h2>
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
                                  <a class="nav-link active" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Ginecoestética</u></b> <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
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
                                    <h2 class="h3 card-header-title"><strong>Editar cabecera de radiofrecuencia: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($radiofrecuencia,['method'=>'PATCH','route'=>['radiofrecuencias.update',$radiofrecuencia->idradiofrecuencia]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label><b><u>Cabecera</u></b></label>
                                                            <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                                                            <input type="hidden" name="idradiofrecuencia" value="{{ $radiofrecuencia->idradiofrecuencia }}">
                                                      </div>
                                                </div>
                                                @php
                                                      $fecha = date("d-m-Y", strtotime($radiofrecuencia->fecha));
                                                @endphp
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label><strong>Fecha</strong></label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input readonly type="text" id="" class="form-control datepicker" name="fecha" value="{{ $fecha }}">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="estado_civil"><strong>Paciente</strong></label>
                                                            <input readonly type="text" class="form-control" name="paciente" value="{{ $radiofrecuencia->Paciente }}">
                                                            <input type="hidden" class="form-control" name="idpaciente" value="{{ $radiofrecuencia->idpaciente }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="estado_civil"><strong>Doctor</strong></label>
                                                            <input readonly type="text" class="form-control" name="doctor" value="{{ $radiofrecuencia->Doctor }} ({{ $radiofrecuencia->especialidad }})">
                                                            <input type="hidden" class="form-control" name="iddoctor" value="{{ $radiofrecuencia->iddoctor }}">
                                                            <input type="hidden" class="form-control" name="idusuario" value="{{ $radiofrecuencia->idusuario }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label><strong>Fototipo de piel</strong></label>
                                                            <select class="form-control" name="fototipo_piel">
                                                                  <option selected value="{{ $radiofrecuencia->fototipo_piel }}">{{ $radiofrecuencia->fototipo_piel }}</option>
                                                                  <option value="I">I</option>
                                                                  <option value="II">II</option>
                                                                  <option value="III">III</option>
                                                                  <option value="IV">IV</option>
                                                                  <option value="V">V</option>
                                                            </select>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                </div>

                                                <div class="col-lg-8 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                          <label for=""><strong><u>Contraindicaciones de Radiofrecuencia</u></strong></label>
                                                      </div>
                                                      <div class="table-responsive">
                                                          <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                              
                                                              <tbody>
                                                                  <tr>
                                                                        <td><strong>¿Tiene algun tipo de implantes en su cuerpo?</strong></td>
                                                                        <td align="center">
                                                                              <select name="implantes" class="form-control">
                                                                                    <option value="{{ $radiofrecuencia->implantes }}">{{ $radiofrecuencia->implantes }}</option>
                                                                                    <option value="SI">SI</option>
                                                                                    <option value="NO">NO</option>
                                                                              </select>
                                                                        </td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td><strong>Tipo de implante</strong></td>
                                                                        <td align="center"><input class="form-control" type="text" name="implantes_tipo" value="{{ $radiofrecuencia->implantes_tipo }}"></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>¿Tiene marcapasos?</strong></td>
                                                                      <td align="center">
                                                                        <select name="marcapasos" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->marcapasos }}">{{ $radiofrecuencia->marcapasos }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                </div>

                                                <div class="col-lg-8 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                          <label for=""><strong><u>Contraindicaciones de Fototerapia</u></strong></label>
                                                      </div>
                                                      <div class="table-responsive">
                                                          <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                              
                                                              <tbody>
                                                                  
                                                                  <tr>
                                                                      <td><strong>Periodo de gestación</strong></td>
                                                                      <td>
                                                                        <select name="periodo_gestacion" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->periodo_gestacion }}">{{ $radiofrecuencia->periodo_gestacion }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Glaucoma</strong></td>
                                                                      <td>
                                                                        <select name="glaucoma" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->glaucoma }}">{{ $radiofrecuencia->glaucoma }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Neoplasias y procesos tumorales</strong></td>
                                                                      <td>
                                                                        <select name="neoplasias_procesos_tumorales" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->neoplasias_procesos_tumorales }}">{{ $radiofrecuencia->neoplasias_procesos_tumorales }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Portador de epilepsia</strong></td>
                                                                      <td>
                                                                        <select name="portador_epilepsia" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->portador_epilepsia }}">{{ $radiofrecuencia->portador_epilepsia }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Antecedentes de fotosensibilidad</strong></td>
                                                                      <td>
                                                                        <select name="antecedentes_fotosensibilidad" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->antecedentes_fotosensibilidad }}">{{ $radiofrecuencia->antecedentes_fotosensibilidad }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Tratamientos con ácidos</strong></td>
                                                                      <td>
                                                                        <select name="tratamientos_acidos" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->tratamientos_acidos }}">{{ $radiofrecuencia->tratamientos_acidos }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Medicamentos fotosensibles</strong></td>
                                                                      <td>
                                                                        <select name="medicamentos_fotosensibles" class="form-control">
                                                                              <option value="{{ $radiofrecuencia->medicamentos_fotosensibles }}">{{ $radiofrecuencia->medicamentos_fotosensibles }}</option>
                                                                              <option value="SI">SI</option>
                                                                              <option value="NO">NO</option>
                                                                        </select>
                                                                      </td>
                                                                  </tr>
                                                                  
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                          <div class="form-group">
                                                              <label for="doctor"><strong>Resumen Tratamiento</strong></label>
                                                              <textarea class="form-control" name="resumen" cols="30" rows="3">{{ $radiofrecuencia->resumen }}</textarea>
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
            $( '#fur' ).datepicker( optSimple );
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
