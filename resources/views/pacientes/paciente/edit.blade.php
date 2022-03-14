@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Editar Paciente: {{ $paciente->nombre}} </strong></h2>
            </header>
            
            <!-- .flash-message -->
            <div class="flash-message">
                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                   @endforeach
            </div> 
            <!-- fin .flash-message -->

            <div class="card-body">
                  <h5 class="h4 card-title">Cambie los datos que desee editar:</h5>
                  <h6><font color="orange"> Campos Obligatorios *</font></h6>
                  @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                  @endif

                  {!!Form::model($paciente,['method'=>'PATCH','route'=>['paciente.update',$paciente->idpaciente],'files'=>'true'])!!}
                  {{Form::token()}}
                  <h3><strong><u>Datos Generales: </u></strong></h3>
                  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}" >
                        @if ($errors->has('nombre'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nombre') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                        <label for="sexo"><font color="orange">*</font>Sexo</label>
                        <select id="sexo" type="text" class="form-control" name="sexo">
                              <option selected="selected" value="{{$paciente->sexo}}">{{$paciente->sexo}}</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                        </select>
                        @if ($errors->has('sexo'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('sexo') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <?php
                        $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));
                  ?>
                  <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                        <label for="fecha_nacimiento"><font color="orange">*</font>Fecha Nacimiento</label>
                        <span class="form-icon-wrapper">
                              <span class="form-icon form-icon--right">
                                    <i class="fas fa-calendar-alt form-icon__item"></i>
                              </span>
                              <input type="text" id="fechanacimiento" class="form-control datepicker" name="fecha_nacimiento" value="{{$fecha_nacimiento}}">
                        </span>
                  </div>
                  <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                        <label for="correo">Correo</label>
                        <input id="correo" type="text" class="form-control" name="correo" value="{{$paciente->correo}}" placeholder="Correo del paciente">
                        @if ($errors->has('correo'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('correo') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{$paciente->telefono}}" placeholder="Teléfono del paciente">
                        @if ($errors->has('telefono'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('telefono') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <label for="direccion">Dirección</label>
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}" placeholder="Dirección del paciente">
                        @if ($errors->has('direccion'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('direccion') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('dpi') ? ' has-error' : '' }}">
                        <label for="nit"><font color="orange">*</font>DPI</label>
                        <input id="dpi" type="text" class="form-control" name="dpi" value="{{$paciente->dpi}}" placeholder="Numero de DPI">
                        @if ($errors->has('dpi'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('dpi') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                        <label for="nit">Nit</label>
                        <input id="nit" type="text" class="form-control" name="nit" value="{{$paciente->nit}}" placeholder="Numero de Nit">
                        @if ($errors->has('nit'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nit') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" name="foto">
                        @if (($paciente->foto)!="")
                               <img src="{{asset('imagenes/pacientes/'.$paciente->foto)}}" height="300px" >
                        @endif
                  </div>
            </div>

            <footer class="card-footer">
                  <div class="form-group">
                        <!--enviamos idcliente para editar los datos de cliente-->

                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                  </div>

                  {!!Form::close()!!}
            </footer>
      </div>
</div>
<script>
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        var tomorrow = new Date(today);
        tomorrow.setDate(tomorrow.getDate() + 1);
        var optSimple = {
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true,
            todayBtn: "linked",
        };
        $( '#fechanacimiento' ).datepicker( optSimple );
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