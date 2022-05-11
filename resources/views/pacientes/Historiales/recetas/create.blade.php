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
                                    <a class="nav-link active" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Recetas</u></b></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico</a>
                              </li>
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Crear Receta: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/recetas', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                      </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                      <div class="form-group">
                                                            <label>Fecha</label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input type="text" id="datepicker" class="form-control datepicker" name="fecha"
                                                                  value="">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor">Doctor</label>
                                                            <input type="hidden" name="iddoctor" value="{{ $doctor->id }}">
                                                            <input readonly type="text" class="form-control" name="doctor" value="{{ $doctor->name }} ({{ $doctor->especialidad }})">
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
                                                            <label for="doctor"><strong><u>Agregar Detalles</u></strong></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="cantidad">Cantidad</label>
                                                            <input type="number" name="pcantidad" class="form-control" id="pcantidad" value="1" onkeypress="return validarentero(event,this.value)">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                          
                                                          <label>Presentacion</label>
                                                          <a href="{{url('almacen\presentacion\create')}}">
                                                                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nueva presentacion">
                                                                        <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                                              <i class="far fa-plus-square"></i>
                                                                        </button>
                                                                  </span>
                                                            </a>
                                                            <select name="ppresentacion" class="form-control selectpicker" id="ppresentacion" data-live-search="true">
                                                                  <option value="" selected>Seleccione una Presentacion</option>
                                                                  @foreach($presentaciones as $presentacion)
                                                                        <option value="{{$presentacion->idpresentacion}}_{{$presentacion->nombre}}">{{$presentacion->nombre}}</option>
                                                                  @endforeach
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                                                      <div class="form-group">
                                                            <label>Medicamento</label>
                                                            <input type="text" name="pmedicamento" class="form-control" id="pmedicamento" value="">
                                                      </div>
                                                </div>
                                                <div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">
                                                      <div class="form-group">
                                                          <label for="">Indicaciones</label>
                                                          <textarea name="pindicaciones" id="pindicaciones" class="form-control" cols="30" rows="2"></textarea>
                                                      </div>
                                                </div>
                                                
                                                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                                                      <hr>
                                                      <div class="form-group">
                                                            <button class="btn btn-info" type="button" id="bt_add"><i
                                                                  class="far fa-plus-square"></i> Agregar</button>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Detalles Agregados</u></strong></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                                                  <thead style="background-color:#A9D0F5">
                                                                        <th><i class="fa fa-sliders-h"></i></th>
                                                                        <th>Cantidad</th>
                                                                        <th>Presentacion</th>
                                                                        <th>Medicamento</th>
                                                                        <th>Indicaciones</th>
                                                                  </thead>

                                                                  <tfoot>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tfoot>
                                                                  
                                                                  <tbody>

                                                                  </tbody>
                                                            </table>
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
    
            $( '#datepicker' ).datepicker( 'setDate', today );
      </script>

      @push ('scripts')
      <script>
          
  
            $(document).ready(function(){
                  $('#bt_add').click(function(){
                        agregar();
                  });
            });
      
            var 
            cont=0;
            
            $("#guardar").hide();
      
            function agregar()
            {
                  datosPresentacion=document.getElementById('ppresentacion').value.split('_');
                  //Detalles
                  cantidad=$("#pcantidad").val();
                  idpresentacion=datosPresentacion[0];
                  presentacion=$("#ppresentacion option:selected").text();
                  medicamento=$("#pmedicamento").val();
                  indicaciones=$("#pindicaciones").val();
      
                  if (cantidad>0 && cantidad!="" && idpresentacion!="" && medicamento!="")
                  {
                  
                        var fila='<tr class="selected" id="fila'+cont+'"><td align="center"><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td align="center"><input type="number" class="form-control input-sm" name="cantidad[]" value="'+cantidad+'"></td><td align="center"><select name="presentacion[]" class="form-control"><option value="'+idpresentacion+'" selected>'+presentacion+'</option>@foreach($presentaciones as $presentacion)<option value="{{$presentacion->idpresentacion}}">{{$presentacion->nombre}}</option>@endforeach</select></td><td align="left"><input type="text" class="form-control input-sm" name="medicamento[]" value="'+medicamento+'"></td><td align="left"><textarea name="indicaciones[]" id="indicaciones[]" class="form-control" cols="30" rows="2">'+indicaciones+'</textarea></td></tr>'; 
                        cont++;
                        limpiar();
                        evaluar();
                        
                        $('#ppresentacion').change();
                        $('#detalles').append(fila);
                  }
                  else
                  {
                        alert ('Los campos Cantidad, Presentacion y Medicamento son obligatorios, revise los datos e intente nuevamente.');
                  }
            }

            function limpiar()
            {
                  $("#pcantidad").val("1");
                  $('#ppresentacion').val("Seleccione una Presentacion");
                  $("#pmedicamento").val("");
                  $("#pindicaciones").val("");
            }

            function evaluar()
            {
                  if (cont>0)
                  {
                  $("#guardar").show();
                  }
                  else
                  {
                  $("#guardar").hide();
                  }
            }

            function eliminar(index)
            {
                  $("#fila" + index).remove();
                  cont--;
                  evaluar();
            }

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
