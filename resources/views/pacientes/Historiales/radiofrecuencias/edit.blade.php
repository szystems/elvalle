@extends ('layouts.admin')
@section('contenido')


      <div>
            <div class="card mb-4">
                  <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Radiofrecuencia Paciente: {{ $paciente->nombre }}</strong></h2>
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
                                    <a class="nav-link active" aria-current="page" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Radiofrecuencias</u></b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
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
                                                      <div class="form-group">
                                                          <label for=""><strong><u>Contraindicaciones</u></strong></label>
                                                      </div>
                                                      <div class="table-responsive">
                                                          <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                              
                                                              <tbody>
                                                                  <tr>
                                                                      <td colspan="2"><strong>Radiofrecuencia:</strong></td>
                                                                  </tr>
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
                                                                  <tr>
                                                                      <td><strong>Fototerapia:</strong></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Periodo de gestación</strong></td>
                                                                      <td align="center"><textarea name="periodo_gestacion" cols="50" rows="3">{{ $radiofrecuencia->periodo_gestacion }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Glaucoma</strong></td>
                                                                      <td align="center"><textarea name="glaucoma" cols="50" rows="3">{{ $radiofrecuencia->glaucoma }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Neoplasias y procesos tumorales</strong></td>
                                                                      <td align="center"><textarea name="neoplasias_procesos_tumorales" cols="50" rows="3">{{ $radiofrecuencia->neoplasias_procesos_tumorales }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Portador de epilepsia</strong></td>
                                                                      <td align="center"><textarea name="portador_epilepsia" cols="50" rows="3">{{ $radiofrecuencia->portador_epilepsia }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Antecedentes de fotosensibilidad</strong></td>
                                                                      <td align="center"><textarea name="antecedentes_fotosensibilidad" cols="50" rows="3">{{ $radiofrecuencia->antecedentes_fotosensibilidad }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Tratamientos con ácidos</strong></td>
                                                                      <td align="center"><textarea name="tratamientos_acidos" cols="50" rows="3">{{ $radiofrecuencia->tratamientos_acidos }}</textarea></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td><strong>Medicamentos fotosensibles</strong></td>
                                                                      <td align="center"><textarea name="medicamentos_fotosensibles" cols="50" rows="3">{{ $radiofrecuencia->medicamentos_fotosensibles }}</textarea></td>
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
