@extends ('layouts.admin')
@section ('contenido')

<?php 
    $user = Auth::user(); 
?>

<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Crear Doctor </strong></h2>
            </header>

            <div class="card-body">
                  <h5 class="h4 card-title">Ingrese los datos que se le piden:</h5>
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

                  {!!Form::open(array('url'=>'seguridad/doctor','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                  {{Form::token()}}
                  <h3><strong><u>Datos Generales: </u></strong></h3>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name"><font color="orange">*</font>Nombre</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre del Doctor">
                        @if ($errors->has('name'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('name') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('no_colegiado') ? ' has-error' : '' }}">
                        <label for="name">No. Colegiado</label>
                        <input id="no_colegiado" type="text" class="form-control" name="no_colegiado" value="{{ old('no_colegiado') }}" placeholder="No. Colegiado" onkeypress="return validarentero(event,this.value)">
                        @if ($errors->has('no_colegiado'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('no_colegiado') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email"><font color="orange">*</font>Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email del Doctor">
                        @if ($errors->has('email'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('email') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                        <label for="fecha_nacimiento"><font color="orange">*</font>Fecha Nacimiento</label>
                        <span class="form-icon-wrapper">
                              <span class="form-icon form-icon--right">
                                    <i class="fas fa-calendar-alt form-icon__item"></i>
                              </span>
                              <input type="text" id="fecha_nacimiento" class="form-control datepicker" name="fecha_nacimiento" >
                        </span>
                  </div>
                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Teléfono del Doctor">
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
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección del Doctor">
                        @if ($errors->has('direccion'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('direccion') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('contacto_emergencia') ? ' has-error' : '' }}">
                        <label for="name">Contacto de Emergencia</label>
                        <input id="contacto_emergencia" type="text" class="form-control" name="contacto_emergencia" value="{{ old('contacto_emergencia') }}" placeholder="Nombre del contacto de emergencia">
                        @if ($errors->has('contacto_emergencia'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('contacto_emergencia') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('telefono_emergencia') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono de Emergencia</label>
                        <input id="telefono_emergencia" type="text" class="form-control" name="telefono_emergencia" value="{{ old('telefono_emergencia') }}" placeholder="Teléfono del contacto de emergencia">
                        @if ($errors->has('telefono_emergencia'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('telefono_emergencia') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" name="foto" value="{{old('foto')}}">
                  </div>
                  <div class="form-group{{ $errors->has('max_descuento') ? ' has-error' : '' }}">
                        <label for="max_descuento"><font color="orange">*</font>Porcentaje Maximo de Descuento</label>
                        <i class="fas fa-percent"></i>
                        <input type="number" name="max_descuento" class="form-control" id="max_descuento" placeholder="Maximo de descuento"  value="{{ old('max_descuento') }}" onkeypress="return validarentero(event,this.value)">
                        @if ($errors->has('max_descuento'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('max_descuento') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <h3><strong><u>Accesos: </u></strong></h3>
                  <div class="form-group{{ $errors->has('tipo_usuario') ? ' has-error' : '' }}">
                        <label for="name"><font color="orange">*</font>Tipo de Usuario</label>
                        <select id="tipo_usuario" type="text" class="form-control" name="tipo_usuario" value="{{ old('tipo_usuario') }}">
                              <option selected="selected" value="Doctor">Doctor</option>
                        </select>
                        @if ($errors->has('tipo_usuario'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('tipo_usuario') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('especialidad') ? ' has-error' : '' }}">
                        <label for="name"><font color="orange">*</font>Especialidad</label>
                        <select id="especialidad" type="text" class="form-control" name="especialidad" value="{{ old('especialidad') }}">
                              <option selected="selected" value="Ginecólogo y Obstetra">Ginecólogo y Obstetra</option>
                              <option value="Dermatólogo">Dermatólogo</option>
                              <option value="Urólogo">Urólogo</option>
                              <option value="Internista">Internista</option>
                              <option value="Urólogo">Nutriólogo</option>
                        </select>
                        @if ($errors->has('especialidad'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('especialidad') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}">
                        
                        <label class="d-flex align-items-center justify-content-between">
                              Activo:
                              <div class="form-toggle">
                                  <input name="activo" type="checkbox" value="SI" checked>
                                  <div class="form-toggle__item">
                                      <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                  </div>
                              </div>
                        </label>
                  </div>
                  
                  
                  
            </div>

            <footer class="card-footer">
                  <div class="form-group">
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

	$( '#fecha_nacimiento' ).datepicker( optSimple );

	$( '#fecha_nacimiento').datepicker( 'setDate', today );
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